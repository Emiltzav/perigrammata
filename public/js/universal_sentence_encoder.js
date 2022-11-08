/**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * =============================================================================
 */


 
// const use = require('@tensorflow-models/universal-sentence-encoder');


var arraylengthofColumns=0,idx=0;
var arraylengthofrows=0;
var sentenses_array = [];
var allsentences=[];
var indexsentence=[];
var sentences=[];
var generic_skills=[];
var gr_skills=[];
var numOfSkills=0,numOfOutcomes=0,langId=1;

const table = document.getElementById("abetTable");
const modalAbet=document.getElementById('finalAbet');
const version = document.getElementById("version").value;
// Page Language
const lang = document.getElementById("language").value; 
if(version==2){
    numOfSkills = document.getElementById("numOfSkills").value;       
    //   CourseLanguage
    langId = document.getElementById("langId").value;   
    numOfOutcomes = document.getElementById("numOfOutcomes").value;   
}
                                                         

if (table!=null){
    for (var r = 0, n = table.rows.length; r < n; r++) {
        
        for (var c = 0, m = table.rows[r].cells.length; c < m; c++) {

            // Save orderNumber of learning outcomes
            if(c==0  && n>1 && r!=0){
              
                indexsentence[idx] = table.rows[r].cells[c].innerHTML;

                // console.log(indexsentence[idx]);
                idx++;
                
            }
            // Save Learning outcomes
            if (c==1 && n>1 && r!=0){
                // console.log(table.rows[r].cells[c].innerHTML);
                // table.rows[r].cells[c].innerHTML= table.rows[r].cells[c].innerHTML.substring(table.rows[r].cells[c].innerHTML.indexOf(' ')+1);
                // table.rows[r].cells[c].innerHTML= table.rows[r].cells[c].innerHTML.substring(table.rows[r].cells[c].innerHTML.indexOf(' ')+1);
                sentenses_array[arraylengthofColumns] = table.rows[r].cells[c].innerHTML;    
                // sentenses_array[arraylengthofColumns] = sentenses_array[arraylengthofColumns].substring(sentenses_array[arraylengthofColumns].indexOf(' ')+1);
                // sentenses_array[arraylengthofColumns]= sentenses_array[arraylengthofColumns].substr(sentenses_array[arraylengthofColumns].indexOf(" ") + 2);
                // console.log(sentenses_array[arraylengthofColumns]);
                arraylengthofColumns++;
            }
            
        }
    }
}

// for (var r = 0, n = sentenses_array.length; r < n; r++) {
//     console.log(sentenses_array);
// }
// indexsentence = [1, 2, 3];
// sentenses_array = [
//     'in one or two sentences, explain in clear jargon-free languagespecific gravity, purge stream, vapor pressure,dew point',
//     'perform Pressure, Volume, Temperature calculations using ideal gas and real gas equations of state',
//     'given a liquid mixtureof two species, use tabulated physical properties to identify feasible seperation processes'

// ]

arraylengthofrows=c;
// arraylengthofrows=9*indexsentence.length;

function showInfo() {
    var x = document.getElementById("moreInfo");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function showInfoProf() {
    var x = document.getElementById("moreInfoProf");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  
// ------------------------------------------------------------------------------- | version 2 OLD |----------------------------------------------------------------------------------

// const sentences2_cr1 = [

//     'Critically evaluate and analyze problems at the interface of engineering and biology.', 
//     'Apply knowledge of math, science and engineering.',
//     'Critical thinking skills.',
//     'Problem identification skills',
//     'Mechanical analysis skills',
//     'Systems analysis skills',
//     'Modeling skills',
//     'Reverse engineering skills',
//     'Differential equation solution skills'
// ];

// const sentences2_cr2 = [
//     'Computer-Aided design.', 
//     'Mechanical, fabrication and manufacturing skills.',
//     'Prototyping skills.', 
//     'Needs assessment skills.',
//     'Project planning skills.',
//     'Medical devices design skills.'
// ];

// const sentences2_cr3 = [
//     'Scientific paper/journal paper writing skills.', 
//     'Resume writing skills.',
//     'Data presentation skills.', 
//     'Oral presentation / scientific view expression skills.',
//     'Oral presentation/ power point presentation skills.'
// ];

// const sentences2_cr4 = [
//     'Comprehension of ethical codes in engineering and medicine.', 
//     'Financial/budgeting skills.',
//     'IP, disclosure reading/writing skills.', 
//     'Demonstrate inter-personal skills and professional behavior.',
//     'Identify and articulate impact of engineering solutions on society.',
//     'Identify and discuss contemporary clinical issues and potential biomedical engineering solutions',
//     'Assess, evaluate and reference peer-reviewed technical literature'
// ];

// const sentences2_cr5 = [
//     'Negotiation skills (conflict management, consensus building).', 
//     'Time management skills.',
//     'Self-assessment skills.', 
//     'Team building skills.'
// ];


// const sentences2_cr6 = [
//     'Design experiments for hypothesis testing.', 
//     'Measurement and data interpretation skills from living systems.',
//     'Basic circuit analysis and troubleshooting skills.', 
//     'Statistical data analysis skills.',
//     'MATLAB skills',
//     'Computer aided design skills',
//     'Algorithm development skills'

// ];

// const sentences2_cr7 = [
//     'Demonstrate a desire for learning through post-graduate career plans.', 
//     'Library skills ( literature search, use of web).' 
// ];



// ------------------------------------------------------------------------------- | version 2 NEW! |----------------------------------------------------------------------------------
// Compare learning outcomes with the following sentences and keep the maximux value of suboutcome for each of the seven criteria.

// const sentences2_cr1 = [

//     'Identify, formulate, and solve complex engineering problems by applying principles of engineering, science, and mathematics.', 
//     'Explain basics concepts of systems and cellular biology.',
//     'Discuss the problems associated with the interactions between living and non-living materials and systems.',
//     'Critically evaluate and analyze problems at the interface of engineering and biology.',
//     'Apply knowledge of math, science and engineering.',
//     'Critical thinking skills.',
//     'Problem identification skills.',
//     'Mechanical analysis skills.',
//     'Systems analysis skills.',
//     'Modeling skills.',
//     'Reverse engineering skills.',
//     'Differential equation solution skills.',
//     'MATLAB skills.',
//     'Computer aided design skills.',
//     'Algorithm development skills.',
//     'Biomedical engineering data presentation skills.'
// ];

// const sentences2_cr2 = [
//     'Apply engineering design to produce solutions that meet specified needs with consideration of public health, safety, and welfare, as well as global, cultural, social, environmental, and economic factors',
//     'Computer-Aided design.', 
//     'Mechanical, fabrication and manufacturing skills.',
//     'Prototyping skills.', 
//     'Needs assessment skills.',
//     'Project planning skills.',
//     'Medical devices design skills.',
//     'MATLAB skills.',
//     'Algorithm development skills.',
//     'Biomedical engineering data presentation skills.'
// ];

// const sentences2_cr3 = [
//     'Communicate effectively with a range of audiences.',
//     'Scientific paper or journal paper writing skills.', 
//     'Resume writing skills.',
//     'Data presentation skills.', 
//     'Oral presentation or scientific view expression skills.',
//     'Oral presentation or powerpoint presentation skills.'
// ];

// const sentences2_cr4 = [
//     'Recognize ethical and professional responsibilities in engineering situations and make informed judgments, which must consider the impact of engineering solutions in global, economic, environmental, and societal contexts.',
//     'Comprehension of ethical codes in engineering and medicine.', 
//     'Financial or budgeting skills.',
//     'Intellectual Property, disclosure reading or writing skills.', 
//     'Demonstrate inter-personal skills and professional behavior.',
//     'Identify and articulate impact of engineering solutions on society.',
//     'Identify and discuss contemporary clinical issues and potential biomedical engineering solutions',
//     'Assess, evaluate and reference peer-reviewed technical literature'
// ];

// const sentences2_cr5 = [
//     'Function effectively on a team whose members together provide leadership, create a collaborative and inclusive environment, establish goals, plan tasks, and meet objectives.',
//     'Negotiation skills, conflict management, consensus building.', 
//     'Time management skills.',
//     'Self-assessment skills.', 
//     'Team building skills.'
// ];


// const sentences2_cr6 = [
//     'Develop and conduct appropriate experimentation, analyze and interpret data, and use engineering judgment to draw conclusions.',
//     'Design experiments for hypothesis testing.', 
//     'Measurement and data interpretation skills from living systems.',
//     'Basic circuit analysis and troubleshooting skills.', 
//     'Statistical data analysis skills.',
//     'MATLAB skills',
//     'Computer aided design skills',
//     'Algorithm development skills',
//     'Biomedical engineering data presentation skills.'

// ];

// const sentences2_cr7 = [
//     'Acquire and apply new knowledge as needed, using appropriate learning strategies.',
//     'Demonstrate a desire for learning through post-graduate career plans.', 
//     'Library skills, literature search, use of web.' 
// ];




// ------------------------------------------------------------------------------- | version 3 |----------------------------------------------------------------------------------
// const sentences2_cr1=[
//     'Applying knowledge of mathematics',
//     'Applying knowledge of science ',
//     'Applying knowledge of engineering',
//     'Identify engineering problems',
//     'Formulate engineering problems',
//     'Solve engineering problems',
//     'Use the techniques necessary for engineering practice',
//     'Use the skills necessary for engineering practice',
//     'Use the modern engineering tools necessary for engineering practice'
//     // 'apply knowledge of mathematics, science and engineering.',
//     // 'identify, formulate, and solve engineering problems.',
//     // 'use the techniques, skills, and modern engineering tools necessary for engineering practice'
// ];
// const sentences2_cr2=[
//     'Design a component to meet desired needs',
//     'Design a system to meet desired needs',
//     'Design a process to meet desired needs',
//     'Use the techniques necessary for engineering practice',
//     'Use the skills necessary for engineering practice',
//     'Use the modern engineering tools necessary for engineering practice'
//     // 'an ability to design a system, component, or process to meet desired needs within realistic constraints such as economic, environmental, social, political, ethical, health and safety, manufacturability, and sustainability',
//     // 'use the techniques, skills, and modern engineering tools necessary for engineering practice'
// ];
// const sentences2_cr3=[
//     'Communicate effectively in writing',
//     'Give effective oral presentations'
//     // 'communicate effectively'
// ];
// const sentences2_cr4=[
//     'Understanding of professional responsibility',
//     'Understanding of ethical responsibility',
//     'Understand the impact of engineering solutions in a global context',
//     'Understand the impact of engineering solutions in a societal context.'
//     // 'an understanding of professional and ethical responsibility','the broad education necessary to understand the impact of engineering solutions in a global, economic, environmental, and societal context',
//     // 'a knowledge of contemporary issues'
// ];
// const sentences2_cr5=[
//     'Work effectively on a team',
//     'Work effectively in a multidisciplinary environment'
//     // 'function on multidisciplinary teams'
// ];
// const sentences2_cr6=[
//     'Designing Experiments',
//     'Conducting Experiments',
//     'Analyzing Data.',
//     'Interpreting Data',
//     'Use the techniques necessary for engineering practice',
//     'Use the skills necessary for engineering practice',
//     'Use the modern engineering tools necessary for engineering practice'
//     // 'design and conduct experiments, as well as to analyze and interpret data',
//     // 'use the techniques, skills, and modern engineering tools necessary for engineering practice'
// ];
// const sentences2_cr7=[
//     'Recognize the need for lifelong learning',
//     'Engage in lifelong learning.'
//     // 'a recognition of the need for, and an ability to engage in life-long learning'
// ];


// ------------------------------------------------------------------------------- | version 3 new! |----------------------------------------------------------------------------------
// const sentences2_cr1=[
//     'Identify, formulate, and solve complex engineering problems by applying principles of engineering, science, and mathematics.',
//     'Applying knowledge of mathematics',
//     'Applying knowledge of science ',
//     'Applying knowledge of engineering',
//     'Identify engineering problems',
//     'Formulate engineering problems',
//     'Solve engineering problems',
//     'Use the techniques necessary for engineering practice',
//     'Use the skills necessary for engineering practice',
//     'Use the modern engineering tools necessary for engineering practice'
//     // 'apply knowledge of mathematics, science and engineering.',
//     // 'identify, formulate, and solve engineering problems.',
//     // 'use the techniques, skills, and modern engineering tools necessary for engineering practice'
// ];
// const sentences2_cr2=[
//     'Apply engineering design to produce solutions that meet specified needs with consideration of public health, safety, and welfare, as well as global, cultural, social, environmental, and economic factors.',
//     'Design a component to meet desired needs',
//     'Design a system to meet desired needs',
//     'Design a process to meet desired needs',
//     'Use the techniques necessary for engineering practice',
//     'Use the skills necessary for engineering practice',
//     'Use the modern engineering tools necessary for engineering practice'
//     // 'an ability to design a system, component, or process to meet desired needs within realistic constraints such as economic, environmental, social, political, ethical, health and safety, manufacturability, and sustainability',
//     // 'use the techniques, skills, and modern engineering tools necessary for engineering practice'
// ];
// const sentences2_cr3=[
//     'Communicate effectively with a range of audiences.',
//     'Communicate effectively in writing',
//     'Give effective oral presentations'
//     // 'communicate effectively'
// ];
// const sentences2_cr4=[
//     'Recognize ethical and professional responsibilities in engineering situations and make informed judgments, which must consider the impact of engineering solutions in global, economic, environmental, and societal contexts.',
//     'Understanding of professional responsibility',
//     'Understanding of ethical responsibility',
//     'Understand the impact of engineering solutions in a global context',
//     'Understand the impact of engineering solutions in a societal context.'
//     // 'an understanding of professional and ethical responsibility','the broad education necessary to understand the impact of engineering solutions in a global, economic, environmental, and societal context',
//     // 'a knowledge of contemporary issues'
// ];
// const sentences2_cr5=[
//     'Function effectively on a team whose members together provide leadership, create a collaborative and inclusive environment, establish goals, plan tasks, and meet objectives.',
//     'Work effectively on a team',
//     'Work effectively in a multidisciplinary environment'
//     // 'function on multidisciplinary teams'
// ];
// const sentences2_cr6=[
//     'Develop and conduct appropriate experimentation, analyze and interpret data, and use engineering judgment to draw conclusions.',
//     'Designing Experiments',
//     'Conducting Experiments',
//     'Analyzing Data.',
//     'Interpreting Data'

//     // 'design and conduct experiments, as well as to analyze and interpret data',
//     // 'use the techniques, skills, and modern engineering tools necessary for engineering practice'
// ];
// const sentences2_cr7=[
//     'Acquire and apply new knowledge as needed, using appropriate learning strategies.',
//     'Recognize the need for lifelong learning',
//     'Engage in lifelong learning.'
//     // 'a recognition of the need for, and an ability to engage in life-long learning'
// ];


// ------------------------------------------------------------------------------- | version 4 |----------------------------------------------------------------------------------

// const sentences2_cr1 = [
//     'Critically evaluate and analyze problems at the interface of engineering and biology. Apply knowledge of math, science and engineering.Critical thinking skills. Problem identification skills. Mechanical analysis skills. Systems analysis skills, Modeling skills. Reverse engineering skills. Differential equation solution skills'
// ];
// const sentences2_cr2 = [
//     'Computer-Aided design.Mechanical, fabrication and manufacturing skills. Prototyping skills. Needs assessment skills. Project planning skills. Medical devices design skills.'
// ];
// const sentences2_cr3 = [
//     'Scientific paper/journal paper writing skills. Resume writing skills. Data presentation skills. Oral presentation / scientific view expression skills. Oral presentation/ power point presentation skills.'
// ];
// const sentences2_cr4 = [
//     'Comprehension of ethical codes in engineering and medicine. Financial/budgeting skills. IP, disclosure reading/writing skills. Demonstrate inter-personal skills and professional behavior.  Identify and articulate impact of engineering solutions on society. Identify and discuss contemporary clinical issues and potential biomedical engineering solutions. Assess, evaluate and reference peer-reviewed technical literature'
// ];
// const sentences2_cr5 = [
//     'Negotiation skills (conflict management, consensus building). Time management skills. Self-assessment skills. Team building skills.'
// ];
// const sentences2_cr6 = [
//     'Design experiments for hypothesis testing. Measurement and data interpretation skills from living systems. Basic circuit analysis and troubleshooting skills. Statistical data analysis skills. MATLAB skills. Computer aided design skills. Algorithm development skills'
// ];
// const sentences2_cr7 = [
//     'Demonstrate a desire for learning through post-graduate career plans. Library skills ( literature search, use of web).'
// ];


// ------------------------------------------------------------------------------- | version 4 NEW! |----------------------------------------------------------------------------------

// const sentences2_cr1 = [
//     'Identify, formulate, and solve complex engineering problems by applying principles of engineering, science, and mathematics. Explain basics concepts of systems and cellular biology. Discuss the problems associated with the interactions between living and non-living materials and systems. Critically evaluate and analyze problems at the interface of engineering and biology. Apply knowledge of math, science and engineering. Critical thinking skills. Problem identification skills. Mechanical analysis skills. Systems analysis skills. Modeling skills. Reverse engineering skills. Differential equation solution skills. MATLAB skills. Computer aided design skills. Algorithm development skills. Biomedical engineering data presentation skills.'
// ];
// const sentences2_cr2 = [
//     'Apply engineering design to produce solutions that meet specified needs with consideration of public health, safety, and welfare, as well as global, cultural, social, environmental, and economic factors. Cumputer Aided Design skills. Mechanical, fabrication and manufacturing skills. Prototyping skills. Needs assessment skills. Project planning skills. Medical devices design skills. MATLAB skills. Algorithm development skills. Biomedical engineering data presentation skills.'
// ];
// const sentences2_cr3 = [
//     'Communicate effectively with a range of audiences. Scientific paper or journal paper writing skills. Resume writing skills. Data presentation skills. Oral presentation or scientific view expression skills. Oral presentation or powerpoint presentation skills.'
// ];
// const sentences2_cr4 = [
//     'Recognize ethical and professional responsibilities in engineering situations and make informed judgments, which must consider the impact of engineering solutions in global, economic, environmental, and societal contexts. Comprehension of ethical codes in engineering and medicine. Financial or budgeting skills. Intellectual Property, disclosure reading or writing skills. Demonstrate inter-personal skills and professional behavior. Identify and articulate impact of engineering solutions on society. Identify and discuss contemporary clinical issues and potential biomedical engineering solutions. Assess, evaluate and reference peer-reviewed technical literature.'
// ];
// const sentences2_cr5 = [
//     'Function effectively on a team whose members together provide leadership, create a collaborative and inclusive environment, establish goals, plan tasks, and meet objectives. Negotiation skills, conflict management, consensus building. Time management skills. Self-assessment skills. Team building skills.'
// ];
// const sentences2_cr6 = [
//     'Develop and conduct appropriate experimentation, analyze and interpret data, and use engineering judgment to draw conclusions. Design experiments for hypothesis testing. Measurement and data interpretation skills from living systems. Basic circuit analysis and troubleshooting skills. Statistical data analysis skills. MATLAB skills. Computer aided design skills. Algorithm development skills. Biomedical engineering data presentation skills.'
// ];
// const sentences2_cr7 = [
//     'Acquire and apply new knowledge as needed, using appropriate learning strategies. Demonstrate a desire for learning through post-graduate career plans. Library skills, literature search, use of web.'
// ];

// ------------------------------------------------------------------------------- | version 5 |----------------------------------------------------------------------------------



// const sentences2_cr1 = [
//     'Applying knowledge of mathematics. Applying knowledge of science. Applying knowledge of engineering. Identify engineering problems. Formulate engineering problems. Solve engineering problems. Use the techniques necessary for engineering practice. Use the skills necessary for engineering practice. Use the modern engineering tools necessary for engineering practice'
// ];
// const sentences2_cr2 = [
//    'Design a component to meet desired needs. Design a system to meet desired needs. Design a process to meet desired needs. Use the techniques necessary for engineering practice. Use the skills necessary for engineering practice. Use the modern engineering tools necessary for engineering practice'
// ];
// const sentences2_cr3 = [
//     'Communicate effectively in writing. Give effective oral presentations.'
// ];
// const sentences2_cr4 = [
//     'Understanding of professional responsibility. Understanding of ethical responsibility. Understand the impact of engineering solutions in a global context. Understand the impact of engineering solutions in a societal context.'
// ];
// const sentences2_cr5 = [
//     'Work effectively on a team. Work effectively in a multidisciplinary environment'
// ];
// const sentences2_cr6 = [
//   'Designing Experiments. Conducting Experiments. Analyzing Data. Interpreting Data. Use the techniques necessary for engineering practice. Use the skills necessary for engineering practice. Use the modern engineering tools necessary for engineering practice'
// ];
// const sentences2_cr7 = [
//     'Recognize the need for lifelong learning. Engage in lifelong learning.'
// ];


// ------------------------------------------------------------------------------- | version 1 NEW |----------------------------------------------------------------------------------

const sentences2_cr1 = [
    'Identify, formulate, and solve complex engineering problems by applying principles of engineering, science, and mathematics.'
];
const sentences2_cr2 = [
    'Apply engineering design to produce solutions that meet specified needs with consideration of public health, safety, and welfare, as well as global, cultural, social, environmental, and economic factors.'
];
const sentences2_cr3 = [
    'Communicate effectively with a range of audiences.'
];
const sentences2_cr4 = [
    'Recognize ethical and professional responsibilities in engineering situations and make informed judgments, which must consider the impact of engineering solutions in global, economic, environmental, and societal contexts.'
];
const sentences2_cr5 = [
    'Function effectively on a team whose members together provide leadership, create a collaborative and inclusive environment, establish goals, plan tasks, and meet objectives.'
];
const sentences2_cr6 = [
    'Develop and conduct appropriate experimentation, analyze and interpret data, and use engineering judgment to draw conclusions.'
];
const sentences2_cr7 = [
    'Acquire and apply new knowledge as needed, using appropriate learning strategies.'
];




// console.log(range.value);
// uncomment to insert threshold values

var threshold = 0;
const
range = document.getElementById('range'),
rangeV = document.getElementById('rangeV'),
range1 = document.getElementById('range1'),
rangeV1 = document.getElementById('rangeV1')
setValue = ()=>{
    const
        newValue = Number( (range.value - range.min) * 100 / (range.max - range.min) ),
        newPosition = 10 - (newValue * 0.2),
        newValue1 = Number( (range1.value - range1.min) * 100 / (range1.max - range1.min) ),
        newPosition1 = 10 - (newValue1 * 0.2);
    rangeV.innerHTML = `<span>${range.value}</span>`;
    rangeV.style.left = `calc(${newValue}% + (${newPosition}px))`;
    rangeV1.innerHTML = `<span>${range1.value}</span>`;
    rangeV1.style.left = `calc(${newValue1}% + (${newPosition1}px))`;
};
document.addEventListener("DOMContentLoaded", setValue);
range.addEventListener('input', setValue);
range1.addEventListener('input', setValue);

// Hide second range for generic skills
if (version==1){
    document.getElementById('range_gen').style.display='none';
}


const generi_skills_gr=[
    'Αναζήτηση, ανάλυση και σύνθεση δεδομένων και πληροφοριών, με τη χρήση και των απαραίτητων τεχνολογιών',
    'Προσαρμογή σε νέες καταστάσεις',
    'Λήψη αποφάσεων',
    'Αυτόνομη εργασία',
    'Ομαδική εργασία',
    'Παραγωγή νέων ερευνητικών ιδεών',
    'Σχεδιασμός και διαχείριση έργων',
    'Σεβασμός στη διαφορετικότητα και την πολυπολιτισμικότητα',
    'Σεβασμός στο φυσικό περιβάλλον',
    'Επίδειξη κοινωνικής, επαγγελματικής και ηθικής υπευθυνότητας και ευαισθησίας σε θέματα φύλου',
    'Άσκηση κριτικής και αυτοκριτικής',
    'Προαγωγή της ελεύθερης, δημιουργικής και επαγωγικής σκέψης',
    'Γραπτή επικοινωνία',
    'Προφορική επικοινωνία',
    'Ηγεσία',
    'Πρωτοβουλία',
    'Εναλλακτική/Καινοτόμος σκέψη',
    'Διαχείριση Χρόνου',
    'Αυτοπεποίθηση',
    'Αποφασιστικότητα',
    'Χρήση Υπολογιστή',
    'Επίλυση προβλημάτων',
    'Διαχείριση αριθμητικών δεδομένων'
]
const generi_skills_en =[
    'Research, analysis and synthesis of data and information, using the necessary technologies',
    'Adapting to new situations',
    'Decision-making',
    'Autonomous work',
    'Teamwork',
    'Production of new research ideas',
    'Project design and Management',
    'Respect for diversity and multiculturalism',
    'Respect for the natural environment',
    'Demonstrating social, professional and ethical responsibility and sensitivity to gender issues',
    'Exercise of criticism and self-criticism',
    'Promoting free, creative and inductive thinking',
    'Written communication',
    'Oral communication',
    'Leadership',
    'Initiative',
    'Alternative/ Innovative Thinking',
    'Time Management',
    'Self Assurance',
    'Determination',
    'Computer Skill',
    'Problem Solving',
    'Numeracy'
];

// Read Generic skills for version 2

if (langId==1){
    // Translate generic skills of gr courses
    for (let i = 0; i < numOfSkills; i++) {
        // console.log(document.getElementById("skill__"+i).value);
        // Διαχείριση αριθμητικών δεδομένων has id 46
        if(document.getElementById("skill__"+i).value==46){
            generic_skills[i]='Numeracy';
        }else{
            let idx=(document.getElementById("skill__"+i).value)-1;
            generic_skills[i]=generi_skills_en[idx];
        }
        // console.log(generi_skills_en[idx]);
    }
}else if (langId==2){
    
    for (let i = 0; i < numOfSkills; i++) {
        // console.log(document.getElementById("skill__"+i).value);
        let idx=(document.getElementById("skill__"+i).value);
        idx=idx-generi_skills_en.length;
        // console.log(generi_skills_en[idx]);
        generic_skills[i]=generi_skills_en[idx];
    }
}

// for (let i = 0; i < generic_skills.length; i++) {
//     console.log(generic_skills[i]);
// }


// ------------------------------------------------------------------------------- | version 1 |----------------------------------------------------------------------------------

sentences_en = [
    'Identify, formulate, and solve complex engineering problems by applying principles of engineering, science, and mathematics.', 
    'Apply engineering design to produce solutions that meet specified needs with consideration of public health, safety, and welfare, as well as global, cultural, social, environmental, and economic factors.', 
    'Communicate effectively with a range of audiences.',
    'Recognize ethical and professional responsibilities in engineering situations and make informed judgments, which must consider the impact of engineering solutions in global, economic, environmental, and societal contexts.', 
    'Function effectively on a team whose members together provide leadership, create a collaborative and inclusive environment, establish goals, plan tasks, and meet objectives.',
    'Develop and conduct appropriate experimentation, analyze and interpret data, and use engineering judgment to draw conclusions.',
    'Acquire and apply new knowledge as needed, using appropriate learning strategies.'
  ];

// Version 6

// const sentences2_cr1 = [
//     'Identify, formulate, and solve complex financial, management, business administration, decision making, mechanical, process and production engineering problems by applying principles of financial, management, business administration, decision making, mechanical, process and production engineering, science, and mathematics.',
// ];
// const sentences2_cr2 = [
//     'Apply financial, mechanical, process, business administration, decision making  and production engineering design to produce solutions that meet specified needs with consideration of public health, safety, and welfare, as well as global, cultural, social, environmental, and economic factors.',
// ];
// const sentences2_cr3 = [
//     'Communicate effectively with a range of audiences.',
// ];
// const sentences2_cr4 = [
//     'Recognize ethical and professional responsibilities in engineering situations and make informed judgments, which must consider the impact of financial, management, business administration, decision making, mechanical, process and production engineering solutions in global, economic, environmental, and societal contexts.',
// ];
// const sentences2_cr5 = [
//     'Function effectively on a team whose members together provide leadership, create a collaborative and inclusive environment, establish goals, plan tasks, and meet objectives.',
// ];
// const sentences2_cr6 = [
//     'Develop and conduct appropriate experimentation, analyze and interpret data, and use financial, mechanical, process, business administration, decision making  and production engineering judgment to draw conclusions.',
// ];
// const sentences2_cr7 = [
//     'Acquire and apply new knowledge as needed, using appropriate learning strategies.'
// ];



if (version == 1){
    sentences = sentences_en;
}else{
    sentences=sentences2_cr1.concat(sentences2_cr2,sentences2_cr3,sentences2_cr4,sentences2_cr5,sentences2_cr6,sentences2_cr7);

}


const sentences_gr = [
    'Να διαθέτει την ικανότητα να καθορίζει, διαμορφώνει και επιλύει σύνθετα προβλήματα μηχανικού εφαρμόζοντας γνώσεις μαθηματικών, φυσικών επιστημών και επιστημών μηχανικού.',
    'Να διαθέτει την ικανότητα να εφαρμόζει σχεδιασμό μηχανικού ώστε να βρίσκει λύσεις για την ανταπόκριση σε συγκεκριμένες ανάγκες λαμβάνοντας υπόψιν την δημόσια υγεία, την ασφάλεια και την ευημερία καθώς και τους παγκόσμιους, πολιτιστικούς, κοινωνικούς περιβαλλοντικούς και οικονομικούς παράγοντες.',
    'Να διαθέτει την ικανότητα αποτελεσματικής επικοινωνίας με ένα εύρος κοινού.',
    'Να διαθέτει την ικανότητα να αναγνωρίζει τις ηθικές και επαγγελματικές του ευθύνες σε καταστάσεις ως μηχανικός και να κάνει τεκμηριωμένες κρίσεις  ώστε να κατανοεί την επίδραση των λύσεων που προτείνει ως μηχανικός στο κοινωνικό και οικονομικό σύνολο καθώς και στο περιβάλλον.',
    'Να διαθέτει την ικανότητα να λειτουργεί αποτελεσματικά σε ομάδες όπου τα μέλη παρέχουν μαζί ηγεσία, δημιουργούν ένα περιβάλλον συνεργασίας και περιεκτικό, καθορίζουν στόχους, προγραμματίζουν εργασίες και εκπληρώνουν στόχους.',
    'Να διαθέτει την ικανότητα να αναπτύσσει και να κάνει κατάλληλα πειράματα, να αναλύει και να ερμηνεύει τα δεδομένα καθώς επίσης να χρησιμοποιεί την κρίση του ως μηχανικός για την εξαγωγή συμπερασμάτων.',
    'Να διαθέτει την ικανότητα να αποκτά και να εφαρμόζει νέες γνώσεις ανάλογα με τις ανάγκες, χρησιμοποιώντας κατάλληλες στρατηγικές μάθησης.'
];

const remove = function(str, n) {
    let i = 0;
    const res = str.replace(/!/g, match => i++ < n ? '' : match); // if i is smaller than the num, replace it with nothing (ie remove it) else, when i becomes greater, leave the current matched item in the string and don't remove it
    return res;
}

// Map Verb bloom level with abet outcomes
function bloomAbet(p1) {
    // Remove spaces from start of the word
    p1 = p1.replace(/\s/g, '');
    str1 = "Ανάλυση";

    if (p1 === "Γνώση" || p1 === "Knowledge"){
        // console.log('Γνώση');
        // return '12457';
        return 12457;
    }else if(p1 === "Comprehension" || p1 === "Κατανόηση"){
        // console.log('Κατανόηση');
        // return '134567';
        return 134567;
    }else if(p1 === "Application" || p1 === "Εφαρμογή"){
        // console.log('Εφαρμογή');
        // return '1234567';
        return 1234567;
    }else if(p1 === "Ανάλυση" || p1 === "Analysis"){
        // console.log('Ανάλυση');
        // return '23467';
        return 23467;
    }else if(p1 === "Synthesis" || p1 === "Σύνθεση"){
        // console.log('Σύνθεση');
        // return '23';
        return 23;
    }else if(p1 === "Evaluation" || p1 === "Αξιολόγηση"){
        // console.log('Αξιολόγηση');
        // return '1234';
        return 1234;
    }
    // return p1 * p2;   // The function returns the product of p1 and p2
}

function myToString(num,id) {
    // var num = bloomAbet(outcomes[j].innerText);
    // var f = 2;
    while(num > 0 ){
        if( num % 10 == id){
            return true;
        }
        num = Math.floor(num / 10); 
    }
    return false;
}

// Concatenate sentences(Student Outcomes) with sentences_array(Abet Outcomes) for comparsion
if (version==1)
    allsentences=sentences.concat(sentenses_array);
else if (version==2){
    // keep only learning outcomes delete last 
    sentenses_array.splice(numOfOutcomes);
    allsentences=sentences.concat(sentenses_array);
    allsentences=allsentences.concat(generic_skills);
}

const init = async () => {
const model = await use.load();
const scores = [];
var l=0;




renderSentences();

const embeddings = await model.embed(allsentences);
var matrixSize=0;
if (version == 1){
 matrixSize = 550;
}else{
    matrixSize = 600;
}
const cellSize = matrixSize / allsentences.length;
const canvas = document.querySelector('canvas');
canvas.width = matrixSize;
canvas.height = matrixSize;

const ctx = canvas.getContext('2d');

const xLabelsContainer = document.querySelector('.x-axis');
const yLabelsContainer = document.querySelector('.y-axis');

for (let i = 0; i < allsentences.length; i++) {
    const labelXDom = document.createElement('div');
    const labelYDom = document.createElement('div');

    labelXDom.textContent = i + 1;
    labelYDom.textContent = i + 1;
    labelXDom.style.left = (i * cellSize + cellSize / 2) + 'px';
    labelYDom.style.top = (i * cellSize + cellSize / 2) + 'px';

    xLabelsContainer.appendChild(labelXDom);
    yLabelsContainer.appendChild(labelYDom);

        for (let j = i; j < allsentences.length; j++) {
        const sentenceI = embeddings.slice([i, 0], [1]);
        const sentenceJ = embeddings.slice([j, 0], [1]);
        const sentenceITranspose = false;
        const sentenceJTransepose = true;
        const score =
            sentenceI.matMul(sentenceJ, sentenceITranspose, sentenceJTransepose)
                .dataSync();
        
        //Save only the score of the last sentence and display score of 7 abet criterion    
               
        // j: Number of columns , i: Number of rows 
        // console.log(sentences.length);
   
        if (j>=sentences.length && i<=sentences.length-1){
            scores[l]=(Math.round(score * 1000) / 1000).toFixed(3);
            // scores[l] = (scores[l] * 100).toFixed(3);
            // console.log(scores[l])    ;   
            l++; 
        }


        ctx.fillStyle = d3.interpolateYlGn(score);

        ctx.fillRect(j * cellSize, i * cellSize, cellSize, cellSize);
        ctx.fillRect(i * cellSize, j * cellSize, cellSize, cellSize);
        }
    }

    // for (var i = 0; i < scores.length; i++) {
    //     console.log(scores[i]);
    // }
    // console.log(scores.length);
    // console.log(sentences.length);
    var v=0,p=0,max=0;
    zeros = [];
    for (var i = 0; i < sentenses_array.length; i++) zeros[i] = 0;
    // console.log(table.rows.length);
    if(document.querySelector('#loading')!=null){
        document.querySelector('#loading').style.display = 'none';
        }
    // Insert score data to array
    if (version==1){
        for (var c = 2, m = arraylengthofrows; c < m; c++) {
            for (var r = 1, n = table.rows.length; r < n; r++) {
                var x=document.getElementById('abetTable').rows[parseInt(r,10)].cells;
                x[parseInt(c,10)].innerHTML=scores[v];
                v++;
            }
        }
    }else if(version==2){



        // var name = window.prompt("Enter threshold: ");
        // for (var c = 2, m = arraylengthofrows; c < m; c++) {
        //     for (var r = 1, n = table.rows.length; r < n; r++) {
        //         var x=document.getElementById('abetTable').rows[parseInt(r,10)].cells;
        //         x[parseInt(c,10)].innerHTML=scores[v];
        //         v++;
        //     }
        // }
        var ii=0,cr1=0,cr2=0,cr3=0,cr4=0,cr5=0,cr6=0,cr7=0,z=0,m1_=0,m2_=0,m3_=0,m4_=0,m5_=0,m6_=0,m7_=0;
        var max_cr1=0,max_cr2=0,max_cr3=0,max_cr4=0,max_cr5=0,max_cr6=0,max_cr7=0;
        
        var cr_1=0,cr_2=0,cr_3=0,cr_4=0,cr_5=0,cr_6=0,cr_7=0;
        var maxcr1=0,maxcr2=0,maxcr3=0,maxcr4=0,maxcr5=0,maxcr6=0,maxcr7=0;

        var scoore=[];
        // console.log((+numOfSkills + +numOfOutcomes) );
        // console.log((scores.length) );
        // console.log(sentences2_cr1.length);
        // console.log(sentences2_cr1.length+sentences2_cr2.length);
        // console.log(sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length);
        // console.log(sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length+sentences2_cr4.length);
        // console.log(sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length+sentences2_cr4.length+sentences2_cr5.length);
        // console.log(sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length+sentences2_cr4.length+sentences2_cr5.length+sentences2_cr6.length);
        // console.log(sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length+sentences2_cr4.length+sentences2_cr5.length+sentences2_cr6.length+sentences2_cr7.length);
        
        var outcomes=document.getElementsByClassName("verbClassification");
        
        
        
        
        
        for (var j = 0, m1 = (+numOfSkills + +numOfOutcomes ) ; j < m1; j++){
           
            for (var i = j, m = scores.length; i <= m; i=i + +numOfSkills + +numOfOutcomes ) {
                // console.log(i );
              

                if (ii<sentences2_cr1.length){
                    // console.log((+scores[i]));
                    // cr1=+cr1 + +(scores[i]);

                    if(+(scores[i])>m1_){
                        m1_ = +(scores[i]);
                    }
                }else if(ii>=sentences2_cr1.length && ii<sentences2_cr1.length+sentences2_cr2.length){
                    // console.log((scores[i]));
                    // cr2=+cr2 + +(scores[i]);

                    if(+(scores[i])>m2_){
                        m2_ = +(scores[i]);
                    }
                }else if (ii>=sentences2_cr1.length+sentences2_cr2.length && ii<sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length){
                    // console.log((scores[i]));
                    // cr3=+cr3 + +(scores[i]);

                    if(+(scores[i])>m3_){
                        m3_ = +(scores[i]);
                    }
                }else if (ii>=sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length && ii<sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length+sentences2_cr4.length){

                    // console.log((scores[i]));
                    // cr4=+cr4 + +(scores[i]);

                    if(+(scores[i])>m4_){
                        m4_ = +(scores[i]);
                    }
                }else if (ii>=sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length+sentences2_cr4.length && ii<sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length+sentences2_cr4.length+sentences2_cr5.length){
          
                    // console.log((scores[i]));
                    // cr5=+cr5 + +(scores[i]);

                    if(+(scores[i])>m5_){
                        m5_ = +(scores[i]);
                    }
                }else if (ii>=sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length+sentences2_cr4.length+sentences2_cr5.length && ii<sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length+sentences2_cr4.length+sentences2_cr5.length+sentences2_cr6.length){
                    // console.log((scores[i]));
                    // cr6=+cr6 + +(scores[i]);

                    if(+(scores[i])>m6_){
                        m6_ = +(scores[i]);
                    }
                }else if (ii>=sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length+sentences2_cr4.length+sentences2_cr5.length+sentences2_cr6.length && ii<sentences2_cr1.length+sentences2_cr2.length+sentences2_cr3.length+sentences2_cr4.length+sentences2_cr5.length+sentences2_cr6.length+sentences2_cr7.length){
                    // console.log((scores[i]));
                    // cr7=+cr7 + +(scores[i]);

                    if(+(scores[i])>m7_){
                        m7_ = +(scores[i]);
                    }
                }
                // console.log(ii);
                ii++;
                
            }
            
          

            // Mapping Verb Bloom level with abet outcomes
            if(j<outcomes.length){
                // console.log(bloomAbet(outcomes[j].innerText));
                // console.log(myToString(bloomAbet(outcomes[j].innerText),2));
                if (myToString(bloomAbet(outcomes[j].innerText),1)==false){//return true if contains 1
                    m1_=0;
                } 
                if (myToString(bloomAbet(outcomes[j].innerText),2)==false){//return true if contains 2
                    m2_=0;
                } 
                if (myToString(bloomAbet(outcomes[j].innerText),3)==false){//return true if contains 3
                    m3_=0;
                } 
                if (myToString(bloomAbet(outcomes[j].innerText),4)==false){//return true if contains 4
                    m4_=0;
                } 
                if (myToString(bloomAbet(outcomes[j].innerText),5)==false){//return true if contains 5
                    m5_=0;
                } 
                if (myToString(bloomAbet(outcomes[j].innerText),6)==false){//return true if contains 6
                    m6_=0;
                } 
                if (myToString(bloomAbet(outcomes[j].innerText),7)==false){//return true if contains 7
                    m7_=0;
                } 
      
                cr1 = cr1 + m1_;
                cr2 = cr2 + m2_;
                cr3 = cr3 + m3_;
                cr4 = cr4 + m4_;
                cr5 = cr5 + m5_;
                cr6 = cr6 + m6_;
                cr7 = cr7 + m7_;

                if (m1_>max_cr1)
                    max_cr1=m1_;
                if (m2_>max_cr2)
                    max_cr2=m2_;
                if (m3_>max_cr3)
                    max_cr3=m3_;
                if (m4_>max_cr4)
                    max_cr4=m4_;
                if (m5_>max_cr5)
                    max_cr5=m5_;
                if (m6_>max_cr6)
                    max_cr6=m6_;    
                if (m7_>max_cr7)
                    max_cr7=m7_;


            }
            
            // console.log(m2_);
            // console.log(m3_);
            // console.log(m4_);
            // console.log(m5_);
            // console.log(m6_);
            // console.log(m7_);

            // console.log(Math.max(m1_, m2_, m3_,m4_,m5_,m6_,m7_));
            

            // console.log(cr1/sentences2_cr1.length);
            // console.log(cr2/sentences2_cr2.length);
            // console.log(cr3/sentences2_cr3.length);
            // console.log(cr4/sentences2_cr4.length);
            // console.log(cr5/sentences2_cr5.length);
            // console.log(cr6/sentences2_cr6.length);
            // console.log(cr7/sentences2_cr7.length);
    
            

                
            var x=document.getElementById('abetTable').rows[parseInt(j+1,10)].cells;
            
            // If is not valid skill (have not activity hours) insert zero score
            if(j>=outcomes.length && x[parseInt(2,10)].innerHTML!=-1){
                x[parseInt(2,10)].innerHTML=0;
                scoore[z]=0;
                z++;
            }else{
                x[parseInt(2,10)].innerHTML=(m1_*100).toFixed(1);
                scoore[z]=m1_;
                z++;
            }
          

            if(j>=outcomes.length && x[parseInt(3,10)].innerHTML!=-1){
                x[parseInt(3,10)].innerHTML=0;
                scoore[z]=0;
                z++;
            }else{
                x[parseInt(3,10)].innerHTML=(m2_*100).toFixed(1);
                scoore[z]=m2_;
                z++;
            }
            
            if(j>=outcomes.length && x[parseInt(4,10)].innerHTML!=-1){
                x[parseInt(4,10)].innerHTML=0;
                scoore[z]=0;
                z++;
            }else{
                x[parseInt(4,10)].innerHTML=(m3_*100).toFixed(1);
                scoore[z]=m3_;
                z++;
            }
            
            if(j>=outcomes.length && x[parseInt(5,10)].innerHTML!=-1){
                x[parseInt(5,10)].innerHTML=0;
                scoore[z]=0;
                z++;
            }else{
                x[parseInt(5,10)].innerHTML=(m4_*100).toFixed(1);
                scoore[z]=m4_;
                z++;
            }
            
            if(j>=outcomes.length && x[parseInt(6,10)].innerHTML!=-1){
                x[parseInt(6,10)].innerHTML=0;
                scoore[z]=0;
                z++;
            }else{
                x[parseInt(6,10)].innerHTML=(m5_*100).toFixed(1);
                scoore[z]=m5_;
                z++;
            }

            if(j>=outcomes.length && x[parseInt(7,10)].innerHTML!=-1){
                x[parseInt(7,10)].innerHTML=0;
                scoore[z]=0;
                z++;
            }else{
                x[parseInt(7,10)].innerHTML=(m6_*100).toFixed(1);
                scoore[z]=m6_;
                z++;
            }

            if(j>=outcomes.length && x[parseInt(8,10)].innerHTML!=-1){
                x[parseInt(8,10)].innerHTML=0;
                scoore[z]=0;
                z++;
            }else{
                x[parseInt(8,10)].innerHTML=(m7_*100).toFixed(1);
                scoore[z]=m7_;
                z++;
            }


            if(j>=outcomes.length){
                console.log(j);
                
                cr_1 = +cr_1 + +x[parseInt(2,10)].innerHTML;
                cr_2 = +cr_2 + +x[parseInt(3,10)].innerHTML;
                cr_3 = +cr_3 + +x[parseInt(4,10)].innerHTML;
                cr_4 = +cr_4 + +x[parseInt(5,10)].innerHTML;
                cr_5 = +cr_5 + +x[parseInt(6,10)].innerHTML;
                cr_6 = +cr_6 + +x[parseInt(7,10)].innerHTML;
                cr_7 = +cr_7 + +x[parseInt(8,10)].innerHTML;
              
           
                if (x[parseInt(2,10)].innerHTML>maxcr1)
                    maxcr1=x[parseInt(2,10)].innerHTML;
                if (x[parseInt(3,10)].innerHTML>maxcr2)
                    maxcr2=x[parseInt(3,10)].innerHTML;
                if (x[parseInt(4,10)].innerHTML>maxcr3)
                    maxcr3=x[parseInt(4,10)].innerHTML;
                if (x[parseInt(5,10)].innerHTML>maxcr4)
                    maxcr4=x[parseInt(5,10)].innerHTML;
                if (x[parseInt(6,10)].innerHTML>maxcr5)
                    maxcr5=x[parseInt(6,10)].innerHTML;
                if (x[parseInt(7,10)].innerHTML>maxcr6)
                    maxcr6=x[parseInt(7,10)].innerHTML;    
                if (x[parseInt(8,10)].innerHTML>maxcr7)
                    maxcr7=x[parseInt(8,10)].innerHTML;
            
    
            }

            // cr_1=0,cr_2=0,cr_3=0,cr_4=0,cr_5=0,cr_6=0,cr_7=0;
            ii=0,m1_=0,m2_=0,m3_=0,m4_=0,m5_=0,m6_=0,m7_=0;
            
            
        }        
    }



    var y=document.getElementById('finalTable').rows[parseInt(1,10)].cells;
    y[parseInt(1,10)].innerText=(max_cr1*100).toFixed(1);
    y[parseInt(2,10)].innerText=(max_cr2*100).toFixed(1);
    y[parseInt(3,10)].innerText=(max_cr3*100).toFixed(1);
    y[parseInt(4,10)].innerText=(max_cr4*100).toFixed(1);
    y[parseInt(5,10)].innerText=(max_cr5*100).toFixed(1);
    y[parseInt(6,10)].innerText=(max_cr6*100).toFixed(1);
    y[parseInt(7,10)].innerText=(max_cr7*100).toFixed(1);

    document.getElementById('total2').value=(max_cr1*100).toFixed(1);
    document.getElementById('total3').value=(max_cr2*100).toFixed(1);
    document.getElementById('total4').value=(max_cr3*100).toFixed(1);
    document.getElementById('total5').value=(max_cr4*100).toFixed(1);
    document.getElementById('total6').value=(max_cr5*100).toFixed(1);
    document.getElementById('total7').value=(max_cr6*100).toFixed(1);
    document.getElementById('total8').value=(max_cr7*100).toFixed(1);

    y=document.getElementById('finalTable').rows[parseInt(2,10)].cells;

    y[parseInt(1,10)].innerText=maxcr1;
    y[parseInt(2,10)].innerText=maxcr2;
    y[parseInt(3,10)].innerText=maxcr3;
    y[parseInt(4,10)].innerText=maxcr4;
    y[parseInt(5,10)].innerText=maxcr5;
    y[parseInt(6,10)].innerText=maxcr6;
    y[parseInt(7,10)].innerText=maxcr7;

    document.getElementById('total9').value=maxcr1;
    document.getElementById('total10').value=maxcr2;
    document.getElementById('total11').value=maxcr3;
    document.getElementById('total12').value=maxcr4;
    document.getElementById('total13').value=maxcr5;
    document.getElementById('total14').value=maxcr6;
    document.getElementById('total15').value=maxcr7;

    var button1 = document.getElementById("maxScores");
    var button2 = document.getElementById("avgScores");
    var button3 = document.getElementById("editScores");

    button2.style.opacity = "0.5";
    button3.style.opacity = "0.5";
    

    button1.onclick = function() {

        var editable_elements = document.querySelectorAll("[contenteditable=true]");
        for(var i=0; i<editable_elements.length; i++)
            editable_elements[i].setAttribute("contenteditable", false);
            
        var y=document.getElementById('finalTable').rows[parseInt(1,10)].cells;
        y[parseInt(1,10)].innerText=(max_cr1*100).toFixed(1);
        y[parseInt(2,10)].innerText=(max_cr2*100).toFixed(1);
        y[parseInt(3,10)].innerText=(max_cr3*100).toFixed(1);
        y[parseInt(4,10)].innerText=(max_cr4*100).toFixed(1);
        y[parseInt(5,10)].innerText=(max_cr5*100).toFixed(1);
        y[parseInt(6,10)].innerText=(max_cr6*100).toFixed(1);
        y[parseInt(7,10)].innerText=(max_cr7*100).toFixed(1);
    
        document.getElementById('total2').value=(max_cr1*100).toFixed(1);
        document.getElementById('total3').value=(max_cr2*100).toFixed(1);
        document.getElementById('total4').value=(max_cr3*100).toFixed(1);
        document.getElementById('total5').value=(max_cr4*100).toFixed(1);
        document.getElementById('total6').value=(max_cr5*100).toFixed(1);
        document.getElementById('total7').value=(max_cr6*100).toFixed(1);
        document.getElementById('total8').value=(max_cr7*100).toFixed(1);

        y=document.getElementById('finalTable').rows[parseInt(2,10)].cells;

        y[parseInt(1,10)].innerText=maxcr1;
        y[parseInt(2,10)].innerText=maxcr2;
        y[parseInt(3,10)].innerText=maxcr3;
        y[parseInt(4,10)].innerText=maxcr4;
        y[parseInt(5,10)].innerText=maxcr5;
        y[parseInt(6,10)].innerText=maxcr6;
        y[parseInt(7,10)].innerText=maxcr7;
    
        document.getElementById('total9').value=maxcr1;
        document.getElementById('total10').value=maxcr2;
        document.getElementById('total11').value=maxcr3;
        document.getElementById('total12').value=maxcr4;
        document.getElementById('total13').value=maxcr5;
        document.getElementById('total14').value=maxcr6;
        document.getElementById('total15').value=maxcr7;
        button2.style.opacity = "0.5";
        button3.style.opacity = "0.5";
        button1.style.opacity = "1";
    }

    button2.onclick = function() {

        
        var editable_elements = document.querySelectorAll("[contenteditable=true]");
        for(var i=0; i<editable_elements.length; i++)
            editable_elements[i].setAttribute("contenteditable", false);

        var y=document.getElementById('finalTable').rows[parseInt(1,10)].cells;
        y[parseInt(1,10)].innerText=((cr1/(+numOfOutcomes))*100).toFixed(1);
        y[parseInt(2,10)].innerText=((cr2/(+numOfOutcomes))*100).toFixed(1);
        y[parseInt(3,10)].innerText=((cr3/(+numOfOutcomes))*100).toFixed(1);
        y[parseInt(4,10)].innerText=((cr4/(+numOfOutcomes))*100).toFixed(1);
        y[parseInt(5,10)].innerText=((cr5/(+numOfOutcomes))*100).toFixed(1);
        y[parseInt(6,10)].innerText=((cr6/(+numOfOutcomes))*100).toFixed(1);
        y[parseInt(7,10)].innerText=((cr7/(+numOfOutcomes))*100).toFixed(1);

        document.getElementById('total2').value=((cr1/(+numOfOutcomes))*100).toFixed(1);
        document.getElementById('total3').value=((cr2/(+numOfOutcomes))*100).toFixed(1);
        document.getElementById('total4').value=((cr3/(+numOfOutcomes))*100).toFixed(1);
        document.getElementById('total5').value=((cr4/(+numOfOutcomes))*100).toFixed(1);
        document.getElementById('total6').value=((cr5/(+numOfOutcomes))*100).toFixed(1);
        document.getElementById('total7').value=((cr6/(+numOfOutcomes))*100).toFixed(1);
        document.getElementById('total8').value=((cr7/(+numOfOutcomes))*100).toFixed(1);

        y=document.getElementById('finalTable').rows[parseInt(2,10)].cells;

        y[parseInt(1,10)].innerText=((+cr_1/(+numOfSkills))).toFixed(1);
        y[parseInt(2,10)].innerText=((+cr_2/(+numOfSkills))).toFixed(1);
        y[parseInt(3,10)].innerText=((+cr_3/(+numOfSkills))).toFixed(1);
        y[parseInt(4,10)].innerText=((+cr_4/(+numOfSkills))).toFixed(1);
        y[parseInt(5,10)].innerText=((+cr_5/(+numOfSkills))).toFixed(1);
        y[parseInt(6,10)].innerText=((+cr_6/(+numOfSkills))).toFixed(1);
        y[parseInt(7,10)].innerText=((+cr_7/(+numOfSkills))).toFixed(1);

        document.getElementById('total9').value=((+cr_1/(+numOfSkills))).toFixed(1);
        document.getElementById('total10').value=((+cr_2/(+numOfSkills))).toFixed(1);
        document.getElementById('total11').value=((+cr_3/(+numOfSkills))).toFixed(1);
        document.getElementById('total12').value=((+cr_4/(+numOfSkills))).toFixed(1);
        document.getElementById('total13').value=((+cr_5/(+numOfSkills))).toFixed(1);
        document.getElementById('total14').value=((+cr_6/(+numOfSkills))).toFixed(1);
        document.getElementById('total15').value=((+cr_7/(+numOfSkills))).toFixed(1);
        button1.style.opacity = "0.5";
        button3.style.opacity = "0.5";
        button2.style.opacity = "1";
    }
    
    button3.onclick = function() {
        var editable_elements = document.querySelectorAll("[contenteditable=false]");
        for(var i=0; i<editable_elements.length; i++)
            editable_elements[i].setAttribute("contenteditable", true);

        var y=document.getElementById('finalTable').rows[parseInt(1,10)].cells;

   
        document.getElementById('total2').value=y[parseInt(1,10)].innerText;
        document.getElementById('total3').value=y[parseInt(2,10)].innerText;
        document.getElementById('total4').value=y[parseInt(3,10)].innerText;
        document.getElementById('total5').value=y[parseInt(4,10)].innerText;
        document.getElementById('total6').value=y[parseInt(5,10)].innerText;
        document.getElementById('total7').value=y[parseInt(6,10)].innerText;
        document.getElementById('total8').value=y[parseInt(7,10)].innerText;

        y=document.getElementById('finalTable').rows[parseInt(2,10)].cells;

        document.getElementById('total9').value=y[parseInt(1,10)].innerText;
        document.getElementById('total10').value=y[parseInt(2,10)].innerText;
        document.getElementById('total11').value=y[parseInt(3,10)].innerText;
        document.getElementById('total12').value=y[parseInt(4,10)].innerText;
        document.getElementById('total13').value=y[parseInt(5,10)].innerText;
        document.getElementById('total14').value=y[parseInt(6,10)].innerText;
        document.getElementById('total15').value=y[parseInt(7,10)].innerText;
        button1.style.opacity = "0.5";
        button2.style.opacity = "0.5";
        button3.style.opacity = "1";
    }
    // On range button click hide elements
   
   

    var button = document.getElementById("theButton"),
    value =  button.form.valueId.value,
    whitespaces=[],l1=0;
    button.onclick = function() {
        if(version==1){
            m1 = table.rows.length-1;
        }else if(version==2){
            m1 = (+numOfSkills + +numOfOutcomes );
        }
        // console.log(m1);
        for (var j = 0 ; j < m1; j++){
            for (var i = j, m = scores.length; i <= m; i=i + m1 ) {
                var x=document.getElementById('abetTable').rows[parseInt(j+1,10)].cells;
                if(j<numOfOutcomes || version==1){
                    x[parseInt(2,10)].style.color='black';
                    x[parseInt(3,10)].style.color='black';
                    x[parseInt(4,10)].style.color='black';
                    x[parseInt(5,10)].style.color='black';
                    x[parseInt(6,10)].style.color='black';
                    x[parseInt(7,10)].style.color='black';
                    x[parseInt(8,10)].style.color='black';
                }else {
                    x[parseInt(2,10)].style.color='#c51162';
                    x[parseInt(3,10)].style.color='#c51162';
                    x[parseInt(4,10)].style.color='#c51162';
                    x[parseInt(5,10)].style.color='#c51162';
                    x[parseInt(6,10)].style.color='#c51162';
                    x[parseInt(7,10)].style.color='#c51162';
                    x[parseInt(8,10)].style.color='#c51162';
                }
            }
        }
        
        // console.log(threshold);
        // console.log('m1='+m1);
       var t1=0,t2=0,t3=0,t4=0,t5=0,t6=0,t7=0;
       whitespaces=[];
        for (var j = 0 ; j < m1; j++){
            // for (var i = j, m = scores.length; i <= m; i=i + m1 ) {
                
                if(version==2){
                    if(j<numOfOutcomes){
                        threshold=range.value/100;
                    }else{
                        threshold=range1.value/100;
                    }
                }else{
                    threshold=range.value/100;
                }
                var x=document.getElementById('abetTable').rows[parseInt(j+1,10)].cells;

                if(x[parseInt(2,10)].innerHTML<=threshold){
                    t1=1+(j*7);
                    // console.log(x[parseInt(2,10)].innerHTML);
                    x[parseInt(2,10)].style.color='#fff';
                    
                    // whitespaces[l1]=x[parseInt(2,10)].innerHTML;
                    // if(i == m){
                        // l1++;
                    // }
                }
                if(x[parseInt(3,10)].innerHTML<=threshold){
                    t2=2+(j*7);
                    // console.log(x[parseInt(3,10)].innerHTML);
                    x[parseInt(3,10)].style.color='#fff';
                    // whitespaces[l1]=x[parseInt(3,10)].innerHTML;
                    // if(i == m){
                    //     l1++;
                    // }
                }
                if(x[parseInt(4,10)].innerHTML<=threshold){
                    t3=3+(j*7);
                    // console.log(x[parseInt(4,10)].innerHTML);
                    x[parseInt(4,10)].style.color='#fff';
                    // whitespaces[l1]=x[parseInt(4,10)].innerHTML;
                    // if(i == m){
                    //     l1++;
                    // }
                }
                if(x[parseInt(5,10)].innerHTML<=threshold){
                    t4=4+(j*7);
                    // console.log(x[parseInt(5,10)].innerHTML);
                    x[parseInt(5,10)].style.color='#fff';
                    // whitespaces[l1]=x[parseInt(5,10)].innerHTML;
                    // if(i == m){
                    //     l1++;
                    // }
                }
                if(x[parseInt(6,10)].innerHTML<=threshold){
                    t5=5+(j*7);
                    // console.log(x[parseInt(6,10)].innerHTML);
                    x[parseInt(6,10)].style.color='#fff';
                    // whitespaces[l1]=x[parseInt(6,10)].innerHTML;
                    // if(i == m){
                    //     l1++;
                    // }
                }
                if(x[parseInt(7,10)].innerHTML<=threshold){
                    t6=6+(j*7);
                    // console.log(x[parseInt(7,10)].innerHTML);
                    x[parseInt(7,10)].style.color='#fff';
                    // whitespaces[l1]=x[parseInt(7,10)].innerHTML;
                    // if(i == m){
                    //     l1++;
                    // }
                }
                if(x[parseInt(8,10)].innerHTML<=threshold){
                    t7=7+(j*7);
                    // console.log(x[parseInt(8,10)].innerHTML);
                    x[parseInt(8,10)].style.color='#fff';
                    // whitespaces[l1]=x[parseInt(8,10)].innerHTML;
                    // if(i == m){
                    //     l1++;
                    // }
                }
                // console.log(x[parseInt(2,10)].innerHTML);
                
            

            // }
            
            if(t1!=0){
            // console.log(t1);
            whitespaces[l1]=t1;
            l1++;
            }
            if(t2!=0){
            // console.log(t2);
            whitespaces[l1]=t2;
            l1++;
            }
            if(t3!=0){
            // console.log(t3);
            whitespaces[l1]=t3;
            l1++;
            }
            if(t4!=0){
            // console.log(t4);
            whitespaces[l1]=t4;
            l1++;
            }
            if(t5!=0){
            // console.log(t5);
            whitespaces[l1]=t5;
            l1++;
            }
            if(t6!=0){
            // console.log(t6);
            whitespaces[l1]=t6;
            l1++;
            }
            if(t7!=0){
            // console.log(t7);
            whitespaces[l1]=t7;
            l1++;
            }
            t1=0,t2=0,t3=0,t4=0,t5=0,t6=0,t7=0;
            
        // console.log(whitespaces.length);
        // l1=0;
        // for (var mm = 0 ; mm < whitespaces.length; mm++){
        //     console.log(whitespaces[mm]);
        // }
          
    
        }
        // for (var mm = 0 ; mm < whitespaces.length; mm++){
        //     console.log(whitespaces[mm]);
        // }
        // console.log('whitespaces.length='+whitespaces.length);
    
        v=0,s=0,p1=1;
    // Insert score to modal
    if (version==1){
        
        for (var c = 0 ; c < scores.length; c++) {
            scores[c]=scores[c].toString().replace('!',''); 
        }
        for (var c = 1, m = arraylengthofrows-1; c < m; c++) {
            for (var r = 1, n = modalAbet.rows.length; r < n; r++) {
                var x=document.getElementById('finalAbet').rows[parseInt(r,10)].cells;
               
                // x[parseInt(c,10)].innerHTML=scores[v];
                var myvalue = 'abet'+s;
               
                // if (document.getElementById(myvalue).style.color=='#fff'){
                //     console.log(ok);
                // }
                
                // console.log(whitespaces.length);
                for (var mm = 0 ; mm < whitespaces.length; mm++){
                    // console.log('whitespaces='+whitespaces[mm]);
                    if(whitespaces[mm]==p1){
                        // console.log('mphke');
                        // console.log('whitespaces.length='+whitespaces.length);
                        // console.log('rows='+r);
           
                        // console.log('columns='+ (+c));
                        scores[v]='!'+scores[v];
                        break;
                    }
                }
                // console.log(r*c);

                // Create abetId_OutcomeId
                // console.log(document.getElementById(myvalue).value);
                if( document.getElementById(myvalue).value!=null ){
                    document.getElementById(myvalue).value = document.getElementById(myvalue).value.substring(document.getElementById(myvalue).value.lastIndexOf("_") + 1);
                    document.getElementById(myvalue).value= scores[v]+'_'+document.getElementById(myvalue).value;
                   
                    p1=p1+7;
                }
                // x[parseInt(c,10)].value=scores[v];
                v++;
                s=s+7;
                
            }
            p1=c+1;
            s=c;
        }
    }else if (version==2){
        // for (var i = 0, m = scoore.length; i < m; i++) {
        //     console.log(scoore[i]);
        // }
        s=0;

        for (var c = 0 ; c < scoore.length; c++) {
            scoore[c]=scoore[c].toString().replace('!',''); 
        }
        for (var r1 = 1, n = (modalAbet.rows.length-2)*7+1; r1 < n; r1++) {
            var myvalue = 'abet'+s;

            for (var mm = 0 ; mm < whitespaces.length; mm++){
                // console.log('whitespaces='+whitespaces[mm]);
                if(whitespaces[mm]==r1){
                    // console.log('mphke');
                    // console.log('whitespaces.length='+whitespaces.length);
                    // console.log('rows='+r);
       
                    // console.log('columns='+ (+c));
                    scoore[s]='!'+scoore[s];
                    break;
                }
            }
            // document.getElementById(myvalue).value = document.getElementById(myvalue).toString().replace('!','');
            // console.log(document.getElementById(myvalue).value);
       
            // document.getElementById(myvalue).value=document.getElementById(myvalue).value.toString().replace('!','');
            // document.getElementById(myvalue).innerHTML = document.getElementById(myvalue).innerHTML.replace('!','');
            document.getElementById(myvalue).value = document.getElementById(myvalue).value.substring(document.getElementById(myvalue).value.lastIndexOf("_") + 1);
            document.getElementById(myvalue).value= scoore[s]+'_'+document.getElementById(myvalue).value;
            s++;
        }
   
    }





    }
    
    // Insert Generic skills to Abet Array
    if(version==2){
        // console.log(lang);
        if (lang=='en'){
            numOfOutcomes=parseInt(numOfOutcomes);
            
            // generic_skills
            v=0;
            for (var r = numOfOutcomes+1, n = numOfOutcomes+1+generic_skills.length; r < n; r++) {
                var x=document.getElementById('abetTable').rows[parseInt(r,10)].cells;
                x[parseInt(1,10)].innerHTML=generic_skills[v];
                v++;
            }
            
        }
         else{

             numOfOutcomes=parseInt(numOfOutcomes);
            for (var r = numOfOutcomes+1, n = numOfOutcomes+1+generic_skills.length; r < n; r++) {
                var x=document.getElementById('abetTable').rows[parseInt(r,10)].cells;
                for (var i =0, n1 = generi_skills_en.length; i < n1; i++) {
                    // console.log(generi_skills_en[i]+' '+x[parseInt(1,10)].innerHTML);
                    if (generi_skills_en[i]==x[parseInt(1,10)].innerHTML){
                        x[parseInt(1,10)].innerHTML=generi_skills_gr[i];
                      
                    }
                }
               
            }
        }
    }


    // Find max value at each row
    for (var r = 0, n = table.rows.length; r < n; r++) { 
        for (var c = 0, m = table.rows[r].cells.length; c < m; c++) {
            if (c>1 && n>1 && r!=0){
                // console.log(table.rows[r].cells[c].innerHTML);
                if(table.rows[r].cells[c].innerHTML>max){
                    max=table.rows[r].cells[c].innerHTML;
                    zeros[r]=c;
                    
                }
            }
        }
        max=0;
    }

    // Mark max values
    for (var l = 1; l < r; l++) { 
        if (table.rows[l].cells[zeros[l]]!=null){
            table.rows[l].cells[zeros[l]].style.fontWeight = "bolder";
        }
    }
    v=0,s=0;

   
    // // Insert score to modal
    if (version==1){
        
        for (var c = 1, m = arraylengthofrows-1; c < m; c++) {
            for (var r = 1, n = modalAbet.rows.length; r < n; r++) {
                var x=document.getElementById('finalAbet').rows[parseInt(r,10)].cells;
                // x[parseInt(c,10)].innerHTML=scores[v];
                var myvalue = 'abet'+s;
               
                if (document.getElementById(myvalue).style.color=='#fff'){
                    console.log(ok);
                }
                for (var mm = 0 ; mm < whitespaces.length; mm++){
                    if(whitespaces[mm]==r*c){
                        scores[v]=0;
                        break;
                    }
                }
                // console.log(r*c);
                // Create abetId_OutcomeId
                // console.log(document.getElementById(myvalue).value);
                document.getElementById(myvalue).value=scores[v]+'_'+document.getElementById(myvalue).value;
                // x[parseInt(c,10)].value=scores[v];
                v++;
                s=s+7;
            }
            s=c;
        }
    }else if (version==2){
        // for (var i = 0, m = scoore.length; i < m; i++) {
        //     console.log(scoore[i]);
        // }
        s=0;


        for (var r1 = 1, n = (modalAbet.rows.length-2)*7+1; r1 < n; r1++) {
            var myvalue = 'abet'+s;
            var element = document.getElementById(myvalue);
            if(element!=null){
            document.getElementById(myvalue).value=scoore[s]+'_'+document.getElementById(myvalue).value;
            s++;
            }
        }
   
    }
    
};

 
init();

const renderSentences = () => {
    
   
    var grsentences=[];
    var s=0,z=0;

    // If page language is English
    if(lang=='en'){

       
            allsentences.forEach((sentence, i) => {
                const sentenceDom = document.createElement('div');
                    sentenceDom.textContent = `${i + 1}) ${sentence}`;
                    if (version==1){
                    document.querySelector('#sentences-container1').appendChild(sentenceDom);
                    }else{
                        document.querySelector('#sentences-container').appendChild(sentenceDom);
                    }

            });
       
        // else if(version==2){
        //     sentences_en=sentences_en.concat(sentenses_array);
        //     sentences_en=sentences_en.concat(generic_skills);
        //     sentences_en.forEach((sentence, i) => {
        //         const sentenceDom = document.createElement('div');
        //             sentenceDom.textContent = `${sentence}`;
        //             document.querySelector('#sentences-container').appendChild(sentenceDom);
        //     });
        //     allsentences.forEach((sentence, i) => {
        //         const sentenceDom = document.createElement('div');
        //             sentenceDom.textContent = `${i + 1}) ${sentence}`;
        //             document.querySelector('#version2_sentenses').appendChild(sentenceDom);

        //     });
        // }
    }
    else if(lang=='gr')
    { // If page language is Greek
        var outcomes=document.getElementsByClassName("grOutcomes");
        
        for(var m=0;m<table.rows.length;m++){
            for(var j=0;j<outcomes.length;j++){
                if((indexsentence[m]-1)==j){
                    grsentences[s]=(outcomes[j].innerText); 
                    s++;
                    break;
                }
            }
        }

        if (langId==1){
            // Insert greek General abilities to modal array
            for (var c = 1, m = 2; c < m; c++) {
                for (var r =1, n = table.rows.length-numOfSkills; r < n; r++) {
                    var x=document.getElementById('abetTable').rows[parseInt(r,10)].cells;
            
                    x[parseInt(c,10)].innerHTML=grsentences[r-1];
                }
            }
        }
        // Insert score data to array
   
        for (var c = 0, m = 1; c < m; c++) {
            for (var r =1, n = table.rows.length-numOfSkills; r < n; r++) {
                var x=document.getElementById('finalAbet').rows[parseInt(r,10)].cells;
                x[parseInt(c,10)].innerHTML=grsentences[r-1];
            }
        }
      

        if (version==1){
            grsentences=sentences_gr.concat(grsentences);
            grsentences.forEach((sentence, i) => {
                const sentenceDom = document.createElement('div');
                sentenceDom.textContent = `${i + 1}) ${sentence}`;
                document.querySelector('#sentences-container1').appendChild(sentenceDom);

            });
        }else if (version==2){

            cnt=0;
            numOfOutcomes=parseInt(numOfOutcomes);
            for (var r = 0, n = generic_skills.length; r < n; r++) {
                var x=document.getElementById('abetTable').rows[parseInt(r,10)].cells;
                for (var i =0, n1 = generi_skills_en.length; i < n1; i++) {
                    // console.log(generi_skills_en[i]+' '+x[parseInt(1,10)].innerHTML);
                    // console.log('generic skills= '+generi_skills_en[i]+' , html= '+x[parseInt(1,10)].innerHTML);
                    if (generi_skills_en[i]==generic_skills[r]){
                        gr_skills[cnt]=generi_skills_gr[i];
                        cnt++;
                    }
                }
               
            }

            grsentences=sentences_gr.concat(grsentences);
            grsentences=grsentences.concat(gr_skills);
            grsentences.forEach((sentence, i) => {
                const sentenceDom = document.createElement('div');
                sentenceDom.textContent = `${i + 1}) ${sentence}`;
                document.querySelector('#sentences-container').appendChild(sentenceDom);

            });
            allsentences.forEach((sentence, i) => {
                const sentenceDom = document.createElement('div');
                    sentenceDom.textContent = `${i + 1}) ${sentence}`;
                    document.querySelector('#version2_sentenses').appendChild(sentenceDom);

            });
        }
    }
};



  
// // Load the model.
// use.load().then(model => {
//     // Embed an array of sentences.
//     const sentences1 = [
//       'Hello.',
//       'How are you?'
//     ];
//     model.embed(sentences1).then(embeddings => {
//       // `embeddings` is a 2D tensor consisting of the 512-dimensional embeddings for each sentence.
//       // So in this example `embeddings` has the shape [2, 512].
//       embeddings.print(true /* verbose */);
//     });
//   });

//   use.loadTokenizer().then(tokenizer => {
//     console.log(tokenizer.encode('Hello, how are you?')); // [341, 4125, 8, 140, 31, 19, 54]
//   });





// Compromize

// nlp.extend(compromiseNumbers)

// var doc = nlp('two bottles of beer')


// 'one bottle of beer'

//  var doc = nlp('No, my son is also named Bort.')
// //  console.log(doc.verbs());
// //   //you can see the text has no tags
// //   console.log(doc.has('#Verb')) //false

//   var str = "This is an amazing sentence.";
//   var words = str.split(" ");
//   console.log(words);


