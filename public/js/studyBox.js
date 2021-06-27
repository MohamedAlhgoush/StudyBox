$(document).ready(function() {
    $('select[name="faculty"]').on('change', function(){
        var faculty_id = $(this).val();
        if(faculty_id) {
            $.ajax({
                url: '/majors/json/'+faculty_id,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                },
                success:function(response) {
                   $('select[name="major"]').empty();
                   $('select[name="course"]').empty();

                    $('select[name="major"]').append('<option selected required>Select Major</option>');

                     $.each(response.data, function(key, value){
                       $('select[name="major"]').append('<option value="'+ value.id +'">' + value.name + '</option>');
                       $('select[name="major"]').removeAttr('disabled');
                     });
               },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="faculty"]').empty();
        }
    });


    $('select[name="major"]').on('change', function(){
        var major_id = $(this).val();
        if(major_id) {
            $.ajax({
                url: '/courses/json/'+major_id,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                },
                success:function(response) {
                   $('select[name="course"]').empty();
                     $('select[name="course"]').append('<option selected required>Select Course</option>');
                     $.each(response.data, function(key, value){
                       console.log(value);
                       $('select[name="course"]').append('<option value="'+ value.id +'">' + value.name + '</option>');
                       $('select[name="course"]').removeAttr('disabled');
                   });
               },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="course"]').empty();
        }
    });


    $('select[name="instructor"]').on('change', function(){
        var user_id = $(this).val();
        if(user_id) {
            $.ajax({
                url: '/instructors/json/'+user_id,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                },
                success:function(response) {
                   $('select[name="instructor"]').empty();
                     $.each(response.data, function(key, value){
                       $('select[name="instructor"]').append('<option  required value="'+ value.id +'">' + value.name + '</option>');
                       $('select[name="instructor"]').removeAttr('disabled');
                   });
               },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="course"]').empty();
        }
    });

    $(document).ready(function(){
        $('#show_university_dropdown').on('change', function() {
          if ( this.value == '1')
          {
               $("#university").hide();
               $("#faculty").hide();
          }
          else  if ( this.value == '2')
          {
              $("#university").show();
              $("#faculty").show();
          }
           else
          {
            $("#university").hide();
            $("#faculty").hide();
          }
        });
    });

    $('select[name="university"]').on('change', function(){
        var uni_id = $(this).val();

        if(uni_id) {

            $.ajax({
                url: '/faculty/json/'+uni_id,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                },
                success:function(response) {
                    console.log(response);
                   $('select[name="faculty"]').empty();
                     $('select[name="faculty"]').append('<option selected>Select faculty</option>');
                     $.each(response.data, function(key, value){
                       console.log(value);
                       $('select[name="faculty"]').append('<option value="'+ value.id +'">' + value.name + '</option>');
                       $('select[name="faculty"]').removeAttr('disabled');
                   });
               },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                      console.log("complete");
                },
                error: function(error){
                      console.log(error);
                }
            });
        } else {
            // $('select[name="faculty"]').empty();
              console.log("done");
        }
    });



    $("#search_category").on('change', function(){
      $("#search_form").submit();
    });

    $("#search_instructor").on('change', function(){
      $("#search_form").submit();
    });
    $("#search_course").on('change', function(){
        $("#search_form").submit();
      });
    $("#search_semester").on('change', function(){
    $("#search_form").submit();
    });
    $("#search_year").on('change', function(){
    $("#search_form").submit();
    });


});


$('#tour-col').mouseover(function(){
    // delete all the classes of hover
    $('.col-6').removeClass('col-md-3');
    // add the hover class just to this node
    $(this).addClass('col-md-12');
}, function(){
    $(this).addClass('col-md-12');
});
$(document).ready(function(){
    $(".border-div").hover(function(){
        $(this).css("outline-style", "double");
    },function(){
        $(this).css("outline-style", "none");
    });
});
$(document).ready(function(){
    $(".border-div2").hover(function(){
        $(this).css("outline-style", "double");
        $(this).css("color", "white");
    },function(){
        $(this).css("outline-style", "none");
        $(this).css("color", "double");
    });
});

$("#input_file").change(function() {
    $("#input_file_label").text(this.files[0].name);
});



