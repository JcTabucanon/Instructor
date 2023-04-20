// $(document).ready(function() {
//   $(".open_modal").click(function() {
//     // Get the data attributes from the button
//     var id = $(this).data('id');
//     var course_code = $(this).data('course-code');
//     var descriptive_title = $(this).data('descriptive-title');
//     var instructor_name = $(this).data('instructor-name');
//     var lec = $(this).data('lec');
//     var lab = $(this).data('lab');
//     var total_units = $(this).data('total-units');
    
//     // Fill in the form fields in the modal dialog
//     $("#id").val(id);
//     $("#course_code").val(course_code);
//     $("#descriptive_title").val(descriptive_title);
//     $("#instructor_name").val(instructor_name);
//     $("#lec").val(lec);
//     $("#lab").val(lab);
//     $("#total_units").val(total_units);
    
//     // Display the modal dialog
//     $("#editModal").modal('show');
//   });
// });

  $(document).ready(function() {
    $('.open_modal').click(function() {
      // Get the values of the clicked row and fill the form
      var id = $(this).data('id');
      var course_code = $(this).data('course-code');
      var descriptive_title = $(this).data('descriptive-title');
      var instructor_name = $(this).data('instructor-name');
      var lec = $(this).data('lec');
      var lab = $(this).data('lab');
      var total_units = $(this).data('total-units');
      $('#edit_id').val(id);
      $('#course_code').val(course_code);
      $('#descriptive_title').val(descriptive_title);
      $('#instructor_name').val(instructor_name);
      $('#lec').val(lec);
      $('#lab').val(lab);
      $('#total_units').val(total_units);

      // Display the modal dialog
      $("#editModal").modal('show');
    });

    $('#edit_form').submit(function(e) {
      e.preventDefault(); // Prevent default form submit
      var data = $(this).serialize(); // Get form data
      $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: data,
        success: function(response) {
          if (response === 'success') {
            $('#editModal').modal('hide'); // Hide the modal after successful update
            location.reload(); // Reload the page to display updated data
          } else {
            alert('Error: ' + response); // Display error message
          }
        },
        error: function(xhr, status, error) {
          alert('Error: ' + error); // Display error message
        }
      });
    });
  });
