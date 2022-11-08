<div class="px-5">

    <div class="container mycontainer1 py-2" id="indexStudent">
        <div class="text-center mt-2 ">  <img  src="<?php echo URL; ?>/public/img/logo.png" height="40" width="65" alt="TUC"></div>
        <h1 class="py-3 text-center "><?php echo t_welcome ; ?></h1>
    
        <div class="copy">
        
            <?php
                if ($_SESSION['lang']=='gr'){?>
                <h5>Καλώς ήρθατε!</h5>
                <br>
                <p>​Η διαδικτυακή Εφαρμογή Καταγραφής Περιγραμμάτων Μαθημάτων (https://perigrammata.tuc.gr) αναπτύχθηκε για την καταγραφή των μαθησιακών αποτελεσμάτων των μαθημάτων, σύμφωνα με την Αρχή Διασφάλισης και Πιστοποίησης της Ποιότητας στην Ανώτατη Εκπαίδευση (ΑΔΙΠ).
                Eπιτρέπει τη συσχέτιση των μαθησιακών αποτελεσμάτων των μαθημάτων με τα αποτελέσματα του κριτηρίου 3 (μαθησιακά αποτελέσματα) της πιστοποίησης ΑΒΕΤ (Accreditation Board for Engineering and Technology).
                </p>
                <p>
                Στο σύστημα πρόσβαση έχουν και οι φοιτητές οι οποίοι συμπληρώνουν αρχικά την σχολή τους και έπειτα την ενέργεια που επιθυμούν. 
                Με την επιλογή της πρώτης ενέργειας συμπληρώνουν τις γενικές ικανότητες, τις οποίες τους ενδιαφέρει περισσότερο να αναπτύξουν, 
                όπως αυτές παρουσιάζονται στην δεύτερη ενότητα στην φόρμα του διδάσκοντα. Στο τέλος παρουσιάζεται αναλυτικός πίνακας που παρουσιάζει σε ποια μαθήματα 
                (κατ’επιλογήν υποχρεωτικά, υποχρεωτικά) αποκτά αυτές τις ικανότητες ο φοιτητής σύμφωνα με τις επιλογές του διδάσκοντα αποτελώντας έτσι έναν σύμβουλο στον φοιτητή. 
                Με την επιλογή της δεύτερης ενέργειας συμπληρώνουν τα μαθήματα που τους ενδιαφέρουν, με το σύστημα να παράγει αναλυτική αναφορά με τα μαθησιακά αποτελέσματα και το σκορ 
                ενίσχυσης για τα ABET επιτεύγματα κάθε μαθήματος.
                </p>

            <?php }else if ($_SESSION['lang']=='en'){?>
                <h5>Welcome!</h5>
                <br>
                <p>The web application perigrammata (https://perigrammata.tuc.gr) was developed to document the learning outcomes of the courses, according to the Quality Assurance and Certification Authority in Higher Education (ADIP).
                It allows the correlation of the learning outcomes of the courses with the results of criterion 3 (learning outcomes) of the ABET (Accreditation Board for Engineering and Technology) accreditation.
                </p>
                <p>
                Students who first complete their school and then the desired energy also have access to the system.
                By choosing the first action they complete the general skills, which they want to enhance, as they are presented in the second section in the form of the teacher.
                Finally a detailed table is presented in which courses(Optional compulsory,Compulsory & optional compulsory) the student acquires these skills according to the teacher's choices, thus becoming a student counselor.
                By choosing the second action, they choose the lessons that interest them  with the system exporting a detailed report with the learning outcomes and the ABET score.
                
                </p>
            <?php  }
            ?>
    


        </div>
    
        <br>




        <!-- <h2 class="text-center">Welcome to my App</h2> -->
        <div class="text-center py-2">
        
            <a href="<?php echo URL; ?>StudentController/StudentPage1?MsgId=1" class="btn myblue1 font-weight-bold text-white animated pulse infinite " style="width: 250px;">
                    <?php echo t_start; ?>
            </a>
        </div>
        <br>
    </div>

</div>