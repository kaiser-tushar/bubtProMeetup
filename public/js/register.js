$(document).ready(function(){
	$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
});
        $("#registrationForm input,#registrationForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            // Prevent spam click and default submit behaviour
            // $("#btnSubmit").attr("disabled", true);
            // event.preventDefault();
            
           
            
        
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });
function getVal()
{
	 // get values from FORM
            var name = $("input#reg_name").val();
            var email = $("input#reg_email").val();
            var phone = $("input#reg_phone").val();
            var present_address = $("textarea#present_address").val();
            var dob = $("input#DOB").val();
            var program = $("select#program :selected").val();
            var department = $("select#department :selected").val();
            var intake = $("select#department :selected").val();
            var id_no = $("input#id_no").val();
            var org_name = $("input#org_name").val();
            var designation = $("input#designation").val();
            var website = $("input#website").val();
            var fb_id = $("input#fb_id").val();
             data= {
                    name: name,phone: phone,email: email,present_address: present_address,
                    dob: dob,program: program,department: department,intake: intake,
                    id_no: id_no,org_name: org_name,designation: designation,website: website,
                    fb_id: fb_id,  '_token' : Laravel.csrfToken
                };
                return data;
                // console.log(data);
}
    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});