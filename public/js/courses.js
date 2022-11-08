$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});


// DATATABLES INITIALIZATION



// admin edit Learning outcomes
$(document).ready(function () {
    $('#adminLo').DataTable({
    "searching": true, // false to disable search (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
});

// dtAllOutcomes
$(document).ready(function () {
    $('#dtAllOutcomes').DataTable({
    "searching": true, // false to disable search (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
});

// studentCheckCourses
$(document).ready(function () {
    $('#studentCheckCourses').DataTable({
    "searching": false, // false to disable search (or any other option)
    "paging": false // false to disable pagination (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
});
// studentOptCourses
$(document).ready(function () {
    $('#studentOptCourses').DataTable({
    "searching": true, // false to disable search (or any other option)
    "paging": false // false to disable pagination (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
});
//Documented Learning Outcomes
$(document).ready(function () {
    $('#dtDocumentedLearningOutcomes').DataTable({
    "searching": true // false to disable search (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
});

//Learning outcomes
$(document).ready(function () {
    $('#dtLearningOutcomes').DataTable({
    "searching": true // false to disable search (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
});
// Basic example
$(document).ready(function () {
    $('#dtBasicExample').DataTable({
    "searching": true // false to disable search (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
});
//For datatable allusers  dtAllUser
$(document).ready(function () {
    $('#dtAllUser').DataTable({
    "searching": true // false to disable search (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
});
//For datatable EnglishVebs dtEnglishVerbs
$(document).ready(function () {
    $('#dtEnglishVerbs').DataTable({
    "searching": true // false to disable search (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
});
//For datatable GreekVebs dtGreekdtGreekVerbsVerbs
$(document).ready(function () {
    $('#dtGreekVerbs').DataTable({
    "searching": true // false to disable search (or any other option)
    });
    $('.dataTables_length').addClass('bs-select');
});

//Copy div to clipboard (Html page)
function CopyToClipboard(containerid) {

    if (document.selection) { 
        var range = document.body.createTextRange();
        range.moveToElementText(document.getElementById(containerid));
        range.select().createTextRange();
        document.execCommand("copy");     

    } else if (window.getSelection) {
        var range = document.createRange();
        range.selectNode(document.getElementById(containerid));
        window.getSelection().addRange(range);
        document.execCommand("copy");
        alert("text copied") 
    }
}


function addNumbers(){
    var a = document.getElementById("js-lectures").value ;
    var b = document.getElementById("js-laboratories").value ;
    var c = document.getElementById("js-tutorials").value ;
    var d = document.getElementById("js-lab-tutorials").value ;
    var x = +a + +b + +c + +d ;

    document.getElementById("js-total_sum").value  = x;
}

function addProfessors(){
    var pid = document.getElementById("js-Professor");
    var ProfessorId = pid.options[pid.selectedIndex].value;
    var ProfessorName = pid.options[pid.selectedIndex].text;
    if(ProfessorName==""){
        return;
    }
    pid.options[pid.selectedIndex].disabled = true;

    var new_prof = '<input type="text" name="ProfessorName[]" id="pname_'+pid.selectedIndex+'" value="'+ProfessorName+'" readonly/>';
    new_prof += '<input type="hidden" name="ProfessorId[]" id="pid_'+pid.selectedIndex+'" value="'+ProfessorId+'" />';
    new_prof += '<button type="button" name="remove" id="pbutton_'+pid.selectedIndex+'" class="btn btn-sm js-table-row-remove" onclick="removeProfessors('+pid.selectedIndex+')">-</button>';
    
    div = document.getElementById( 'js-professors' );
    div.insertAdjacentHTML( 'beforeend', new_prof );
}

function removeProfessors(selected_Index){
    
    var pid = document.getElementById("js-Professor");
    
    pid.options[selected_Index].disabled = false;

    var parent = document.getElementById("js-professors");
    var child = document.getElementById("pname_"+selected_Index);
    parent.removeChild(child);

    var child = document.getElementById("pid_"+selected_Index);
    parent.removeChild(child);

    
    var child = document.getElementById("pbutton_"+selected_Index);
    parent.removeChild(child);
}


function addPrerequisites(){
    var prid = document.getElementById("js-Prerequisites");
    var PrerequisiteId = prid.options[prid.selectedIndex].value;
    var CourseName = prid.options[prid.selectedIndex].text;
    if(CourseName==""){
        return;
    }
    prid.options[prid.selectedIndex].disabled = true;

    var new_requiredCourse = '<input type="text" name="CourseName[]" id="prname_'+prid.selectedIndex+'" value="'+CourseName+'" readonly/>';
    new_requiredCourse += '<input type="hidden" name="PrerequisiteId[]" id="prid_'+prid.selectedIndex+'" value="'+PrerequisiteId+'" />';
    new_requiredCourse += '<button type="button" name="remove" id="prbutton_'+prid.selectedIndex+'" class="btn btn-sm js-table-row-remove" onclick="removePrerequisites('+prid.selectedIndex+')">-</button>';
    
    div = document.getElementById( 'js-courses' );
    div.insertAdjacentHTML( 'beforeend', new_requiredCourse );
}

function removePrerequisites(selected_Index){
    
    var prid = document.getElementById("js-Prerequisites");
    
    prid.options[selected_Index].disabled = false;

    var parent = document.getElementById("js-courses");
    var child = document.getElementById("prname_"+selected_Index);
    parent.removeChild(child);

    var child = document.getElementById("prid_"+selected_Index);
    parent.removeChild(child);

    var child = document.getElementById("prbutton_"+selected_Index);
    parent.removeChild(child);
}


function calc_sum( ActivityId, notice )
{
    $( ".totalHours_warning" ).hide();
    var sum = 0;
    $('.ActivityHours').each(function(i, obj) {
        sum += Number(this.value);
    });
    $( ".totalHours" ).val(sum);
    min_totalHours = $( "#min_totalHours" ).val();
    if( sum < min_totalHours )
    {
        $( ".totalHours_warning" ).show();        
    }

    if( ActivityId != "" && act_hours != "" && act_hours != 0 )
    {
        var act_hours = $( "#activity_" + ActivityId ).val();
        act_hours.replace( " ", "" );
        
        if( act_hours != "" && act_hours != 0 )
        {

            $.post({
                url: url + 'ProfessorController/getActivitySkill',
                data: {ActivityId: ActivityId},
                error: function() {
                    //$('#info').html('<p>An error has occurred</p>');
                },
                dataType: 'json',
                success: function(data) {

                    var missing = "";
                    $.each( data, function( key, value ) {
                        
                        if(document.getElementById('skill_' + value.SkillId).checked) {
                            missing = "";
                            return false;
                        } else {
                            missing += "\n -" + value.Description
                        }
                    });
                    
                    $( ".activity_error" ).hide();
                    $("#finish_creation").prop("disabled",false);
                    if( missing != "" )
                    {
                        // $( ".activity_error" ).show();
                        // $("#finish_creation").prop("disabled",true);
                        
                        if( notice == true )
                        {

                       
                            alert("Based on your choice of workload of education activities (section 4), in the Generic Skills field, you must choose one of the following: \nΣύμφωνα με τις επιλογές σας σε δραστηριότητες στην οργάνωση διδασκαλίας (περιοχή 4 της φόρμας), στις Γενικές Ικανότητες πρέπει να επιλέξετε κάποιο από τα παρακάτω: \n " + missing);
                            //alert("You have to choose any of the above: \n" + missing)
                        }
                    }    
                }
            });
        }
        else
        {
            $( ".activity_error" ).hide();
            $("#finish_creation").prop("disabled",false);
        }
    }
}

function totalSum(){
    return document.getElementById('totalScore').value = sum;
}
function handleChange(input) {
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value = 100;

    var sum = 0;

    $('.percent').each(function(i, obj) {
        sum += Number(this.value);
        document.getElementById('totalScore').value = sum;
    });
    
    if( sum != 100 )
    {
        if($('#languageId').value == 'en'){
            $('.percent').tooltip({'title': 'Attention: Τhe summative assessment scores do not sum up to 100.'});
        }else{
            $('.percent').tooltip({'title': 'Προσοχή: Η αθροιστική αξιολόγηση δεν αθροίζει στο 100.'});
        }
    }
    if (sum>100){
        if($('#languageId').value == 'en'){
            alert( "Attention: Τhe summative assessment scores do not sum up to 100. It is: " + sum );

        }else{
            alert( "Προσοχή: Η αθροιστική αξιολόγηση δεν αθροίζει στο 100. Είναι: " + sum );

        }
    }
  }


$(document).ready(function(){
    
    $( ".ActivityHours" ).change(function() {

        ActivityId = this.id.replace("activity_", "");
        calc_sum( ActivityId, true )
      });
    calc_sum( "", false );

    $( ".skill_list" ).change(function() {
        calc_sum( "", false )
    });


   
  $('#learning_outcomes_form').on('keyup keypress', function(e) {
       var keyCode = e.keyCode || e.which;
       if (keyCode === 13) { 
        e.preventDefault();
         return false;
       }
  });
    
      $( ".activity_error" ).hide();
    
    $( "tbody#sortable" ).sortable();
    
    // $( "tbody#sortable_" ).sortable();
});

//delete row from learning outcomes
$("#outcomes_table").on('click', '.btn-remove', function () {
    $(this).closest('tr').remove();
});


//Fill circle progress bar Admin-Documented Learning Outcomes
$(function() {

    $(".progress1").each(function() {
  
      var value = $(this).attr('data-value');
      var left = $(this).find('.progress-left .progress-bar1');
      var right = $(this).find('.progress-right .progress-bar1');
  
      if (value > 0) {
        if (value <= 50) {
            // right.css('transition', 'all 0.4s ease-in')
           
          right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
        } else {
            
          right.css('transform', 'rotate(180deg)')
          left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
        }
      }
  
    })
  
    function percentageToDegrees(percentage) {
  
      return percentage / 100 * 360
  
    }
  
  });

//   function myFunction() {
//     document.getElementById("myprogressbar").style.transition = "all 2s";
//   }
function myJavaScriptFunction() {
   // define a new variable
    alert ('Saved succesfully!')
}

function myFunction_() {
   
    var x = document.getElementById("getDname").value;
 
    // document.getElementById("output").value=document.getElementById("getDname").value;
    // window.location.href = url+"StudentController/StudentPage2?name=" + x;
    var loan = +document.getElementById("getDname").value;
    // document.getElementById('numpay').textContent = loan; 

    // document.getElementsById("studentCheckCourses_filter").value ="Αγγ";
    if(x != ''){
        document.getElementById("admDivCheck").style.display = "block";
    }
    else{
        document.getElementById("admDivCheck").style.display = "none";
    }
}

// $.post(url, {data: document.getElementById('numpay').innerHTML});

function checkRequired() {
    if ($('input[type=checkbox]:checked').length > 0) {  // the "> 0" part is unnecessary, actually
        $('input[type=checkbox]').prop('required', false);
    } else {
        $('input[type=checkbox]').prop('required', true);
    }

}
function getStudChoice() {
   
    var x = document.getElementById("getStudentChoice").value;
    // var x1 = document.getElementById("getDname").value;
    if(x == 1 ){
        document.getElementById("stud_choice2_div").style.display = "none";
        document.getElementById("stud_choice1_div").style.display = "block";  
        // document.getElementById("stud_choice2_div").classList.add("hide");  
        // document.getElementById("stud_choice1_div").classList.remove("hide"); 
    }else if(x == 2 ){
        document.getElementById("stud_choice1_div").style.display = "none";
        document.getElementById("stud_choice2_div").style.display = "block";
        // document.getElementById("stud_choice1_div").classList.add("hide");  
        // document.getElementById("stud_choice2_div").classList.remove("hide"); 
    }
    else{
        document.getElementById("stud_choice1_div").style.display = "none";
        document.getElementById("stud_choice2_div").style.display = "none";
        // document.getElementById("stud_choice1_div").classList.add("hide");  
        // document.getElementById("stud_choice2_div").classList.add("hide");  
    }
}


// Table switch button
var e = document.getElementById("optional-courses"),
    d = document.getElementById("all-courses"),
    t = document.getElementById("switcher"),
    m = document.getElementById("optional_courses"),
    y = document.getElementById("all_courses");
if(e){
    e.addEventListener("click", function(){
        t.checked = false;
        e.classList.add("toggler--is-active");
        d.classList.remove("toggler--is-active");
        m.classList.remove("hide");
        y.classList.add("hide");
    });
}

if(d){
    d.addEventListener("click", function(){
    t.checked = true;
    d.classList.add("toggler--is-active");
    e.classList.remove("toggler--is-active");
    m.classList.add("hide");
    y.classList.remove("hide");
    });
}

if(t){
t.addEventListener("click", function(){
  d.classList.toggle("toggler--is-active");
  e.classList.toggle("toggler--is-active");
  m.classList.toggle("hide");
  y.classList.toggle("hide");
})
}
// --
$(document).ready(function() {
	"use strict";
	
	// OPEN MODAL ON TRIGGER CLICK
	$(".quickViewTrigger").on('click', function () {
		var $quickview = $(this).next(".quickViewContainer");
		$quickview.dequeue().stop().slideToggle(500, "easeInOutQuart");
		$(".quickViewContainer").not($quickview).slideUp(200, "easeInOutQuart");
	});
	
	// CLOSE MODAL WITH MODAL CLOSE BUTTON
	$(".close").click(function() {
		$(".quickViewContainer").fadeOut("slow");
	});
	
});

// CLOSE MODAL ON ESC KEY PRESS
$(document).on('keyup', function(e) {
	"use strict";
	if (e.keyCode === 27) {
		$(".quickViewContainer").fadeOut("slow");
	}
});

// CLOSE MODAL ON CLICK OUTSIDE MODAL
$(document).mouseup(function (e) {
	"use strict";
    var container = $(".quickViewContainer");
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        $('.quickViewContainer').fadeOut("slow");
    }
});

$('#stud_all').on('show.bs.modal', function(e) {
    var product = $(this).data('id');
    $(".modal-body #product_name").val(product);
  });

//   var lockbtn = document.getElementById("lock");
    
//   lockbtn.onclick = function() {
//     console.log(lockbtn.value);

//   }

function getOccurrence(array, value) {
    return array.filter((v) => (v === value)).length;
}


function validation(sel)
{
    // Id poy yparxoyn hdh
    var id = document.getElementsByClassName("myselect");
    var errormsg = document.getElementById("errormsg");
    var counter = 0,pos =0;
    
    for(var i=0;i<id.length;i++){
        if(id[i].value!='' && id[i].value==sel.value){
            counter++;
        }
        for(var j=0;j<id.length;j++){
            if(id[i].value!='' && id[i].value ==id[j].value && i!=j){
                counter++;
            }
        }
    }

    // console.log(occurrencesOf(sel.value, id) );// returns 3);  // 2
    for(var i=0;i<id.length;i++){
        
        if(id[i].value==sel.value && id[i].value!='' && counter>1){
            
            // if(document.getElementById('languageId').value == 'en'){
            //     alert( "Attention: You can't use the same verb more than once! ");
    
            // }else{
            //     alert( "Προσοχή: Δεν μπορείτε να χρησιμοποιήσετε το ίδιο ρήμα πάνω απο μια φορά!");
            // }
            errormsg.style.display = "block";
            // id[i].classList.remove('is-valid');
            // id[i].classList.add('is-invalid');
            // for(var j=i+2;j<15;j++){
            //     id[j].style.display = 'none';
            // }
            break;
        }else{
            errormsg.style.display = "none";
           
        }
        // else if(id[i].value!='') {
        //     id[i].classList.remove('is-invalid');
        //     id[i].classList.add('is-valid');
        //     for(var j=0;j<15;j++){
        //         id[j].style.display = 'block';
        //     }
        // }
    }
}