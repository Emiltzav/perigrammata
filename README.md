MySQL cheatsheet: 
https://gist.github.com/hofmannsven/9164408

Export database backup:   
mysqldump -u [username] -p [database] > db_backup_name.sql 

Copy database backup (.sql file) from container to host: 
sudo docker cp mmf13122021_final_db_1:/db_backup_200422.sql .

Import a database dump (more info here): 
mysql -u [username] -p -h localhost [database] < db_backup.sql

///////////////////////////
  
Perigrammata: 

INSERT INTO user (FirstName, LastName, UserName, ProfileId) VALUES ('Aimilios', 'Tzavaras', 'atzavaras', 3);

INSERT INTO school (SchoolName, langId) VALUES ('Test sxolh', 1);


MYSQL_PASSWORD=
@ad1p_c0urses_29_01_2020



Για το πρόβλημα με το back: 

https://stackoverflow.com/questions/19215637/navigate-back-with-php-form-submission


// commands on perigrammata_db

CREATE TABLE IF NOT EXISTS `institution` (
  `Id` int(11) NOT NULL,
  `InstitutionName` varchar(100) NOT NULL,
  `langId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

ALTER TABLE `institution`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_institution_lang_idx` (`langId`);

  ALTER TABLE `institution`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;

  ALTER TABLE `institution`
  ADD CONSTRAINT `FK_institution_lang` FOREIGN KEY (`langId`) REFERENCES `language_of_teaching` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


// alter table courses  

ALTER TABLE `courses` 
ADD COLUMN `InstitutionId` int(11) DEFAULT NULL;

ALTER TABLE `courses`
ADD KEY `FK_courses_institution_idx` (`InstitutionId`); 

// de me afhnei !!
ALTER TABLE `courses`
ADD CONSTRAINT `FK_courses_institution` FOREIGN KEY (`InstitutionId`) REFERENCES `institution` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
// de me afhnei !!



// alter table school

ALTER TABLE `school` 
ADD COLUMN `InstitutionId` int(11) DEFAULT NULL; 

ALTER TABLE `school`
ADD KEY `FK_school_institution_idx` (`InstitutionId`);

// de me afhnei !!
ALTER TABLE `school`
ADD CONSTRAINT `FK_school_institution` FOREIGN KEY (`InstitutionId`) REFERENCES `institution` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
// de me afhnei !!



// alter table department

ALTER TABLE `department` 
ADD COLUMN `InstitutionId` int(11) DEFAULT NULL; 

ALTER TABLE `department`
ADD KEY `FK_department_institution_idx` (`InstitutionId`);

// de me afhnei !!
ALTER TABLE `department`
ADD CONSTRAINT `FK_department_institution` FOREIGN KEY (`InstitutionId`) REFERENCES `institution` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
// de me afhnei !! me afhnei twra.

ALTER TABLE `department` 
ADD COLUMN `SecondInstitutionId` int(11) DEFAULT NULL; 

ALTER TABLE `courses` 
ADD COLUMN `SecondSchoolId` int(11) DEFAULT NULL; 

ALTER TABLE `courses` 
ADD COLUMN `SecondInstitutionId` int(11) DEFAULT NULL; 



// insert 

INSERT INTO `institution` (`InstitutionName`, `langId`) VALUES ('Polutexneio Krhths', 1); 

INSERT INTO `institution` (`InstitutionName`, `langId`) VALUES ('EMP', 1);


(276, 'Aimilios', 'Tzavaras', 'atzavaras', 3);

INSERT INTO `institution` (`InstitutionName`, `langId`) VALUES 
('Πολυτεχνείο Κρήτης', 1), 
('Εθνικό Μετσόβιο Πολυτεχνείο', 1);  



// pinakas ADMINS 

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `AdminId` int(11) NOT NULL,   
  `ManagedDepartmentId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;


ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_admin_user_idx` (`UserId`);

  ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

  ALTER TABLE `admin`
  ADD CONSTRAINT `FK_admin_user` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


INSERT INTO `admin` (`UserId`, `AdminId`, `ManagedDepartmentId`) VALUES (276, 4, 0);    


// pinakas SCHOOL_TO_DEPARTMENT 

CREATE TABLE IF NOT EXISTS `school_to_department` (
  `Id` int(11) NOT NULL,
  `SchoolId` int(11) NOT NULL,
  `DepartmentId` int(11) NOT NULL   
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

ALTER TABLE `school_to_department`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_school_to_department_idx` (`SchoolId`);

  ALTER TABLE `school_to_department`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

  ALTER TABLE `school_to_department`
    ADD CONSTRAINT `FK_departmentl_school_to_department` FOREIGN KEY (`DepartmentId`) REFERENCES `department` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `FK_school_school_to_department` FOREIGN KEY (`SchoolId`) REFERENCES `school` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

  


// AdminId (TIMES)
 
1 ---> idruma 
2 ---> sxolh 
3 ---> programma spoudwn 
4 ---> perigrammata (superAdmin) 

// ManagedDepartmentId (TIMES)

2 epiloges:
1) opoiodhpote id sxolhs / idrumatos / programm. spoudwn 
2) 0 ---> perigrammata (superAdmin)   


Πολυτεχνείο Κρήτης: Institution Id = 25

Για να με θέσω διαχειριστή ιδρύματος για το TUC: 
update admin set AdminId = 1, ManagedDepartmentId = 25 Where UserId = 276;





Admin ιδρυματος: -----   ΟΚ
-----  πχ AdminId = 1, ManagedDepartmentId = 24, 
----- update admin set AdminId = 1, ManagedDepartmentId = 24 where UserId = 276;

Μπορει να κανει:
Δημιουργια σχολης - ΜΟΝΟ ΓΙΑ ΤΟ ΙΔΡΥΜΑ ΤΟΥ ---> OK (22/9)  
Δημιουργια μαθηματος - ΜΟΝΟ ΓΙΑ ΤΟ ΙΔΡΥΜΑ ΤΟΥ ---> ΟΚ (22/9) 
Καταλογος σχολων - ΜΟΝΟ ΤΟΥ ΙΔΡΥΜΑΤΟΣ ΤΟΥ ---> OK (22/9)
Καταλογος μαθηματων - ΜΟΝΟ ΓΙΑ ΤΟ ΙΔΡΥΜΑ ΤΟΥ ---> OK (22/9) 
Διαγραφη μαθηματος - ΜΟΝΟ ΓΙΑ ΤΟ ΙΔΡΥΜΑ ΤΟΥ ---> OK (22/9) 
Επεξεργασια-Διαγραφη σχολης - ΜΟΝΟ ΓΙΑ ΤΟ ΙΔΡΥΜΑ ΤΟΥ ---> OK (29/9) και ΟΚ (29/9)  
Διαγραφη μαθηματος - ΜΟΝΟ ΓΙΑ ΤΟ ΙΔΡΥΜΑ ΤΟΥ ---> OK (22/9)    



Admin σχολης: 
-----   πχ AdminId = 2, ManagedDepartmentId = 6, 
----- update admin set AdminId = 2, ManagedDepartmentId = 6 where UserId = 276;

Μπορει να κανει: 
Δημιουργια μαθηματος - ΜΟΝΟ ΓΙΑ ΤΗ ΣΧΟΛΗ ΤΟΥ ---> ΟΚ (29/9)
Επεξεργ/σια - Διαγραφη μαθηματος - ΜΟΝΟ ΓΙΑ ΤΗ ΣΧΟΛΗ ΤΟΥ ---> ΟΚ (29/9) και OK (29/9)
Καταλογος μαθηματων - ΜΟΝΟ ΓΙΑ ΤΗ ΣΧΟΛΗ ΤΟΥ ---> OK (29/9)



Admin προγρ. σπουδων: 
-----   πχ AdminId = 3, ManagedDepartmentId = 15, 
----- update admin set AdminId = 3, ManagedDepartmentId = 15 where UserId = 276;

Μπορει να κανει: 
Δημιουργια μαθηματος - ΜΟΝΟ ΓΙΑ ΤΟ ΠΡΟΓΡ. ΣΠΟΥΔΩΝ ΤΟΥ ---> ΟΚ (bug στο ιδρυμα οταν φτιαχνεις νεο μαθημα, παιρνει TUC!!)
Καταλογος μαθηματων - ΜΟΝΟ ΓΙΑ ΤΟ ΠΡΟΓΡ. ΣΠΟΥΔΩΝ ΤΟΥ ---> OK (28/9)   



Super Admin: -----   ΟΚ

Μπορει να κανει τα παντα. 
Δημιουργια ιδρυματος ---> OK (22/9)
Δημιουργια προγρ. σπουδων ---> ΤΗΝ ΚΑΝΩ MANUALLY ΓΙΑ ΑΡΧΗ 
Δημιουργια σχολης - ΣΕ ΟΠΟΙΟ ΙΔΡΥΜΑ ΘΕΛΕΙ ---> OK (22/9)  
Δημιουργια μαθηματος - ΣΕ ΟΠΟΙΟ ΙΔΡΥΜΑ ΘΕΛΕΙ ---> OK (23/9)  
Καταλογος σχολων - ΟΛΕΣ ---> OK (23/9)
Καταλογος μαθηματων - ΟΛΑ ---> OK (23/9)
Επεξεργ.-Διαγραφη μαθηματος ---> OK (23/9) και OK (23/9)
Επεξεργ.-Διαγραφη σχολης ---> ΟΚ (29/9) και ΟΚ (29/9)
Καταλογος προγρ. σπουδων --->  OK (26/9)    
Επεξεργ./Διαγραφη προγρ. σπουδων ---> OK (23/9)  
τι αλλο?   



--->>
Προβολη προγρ. σπουδων να φαινονται και οι 2 σχολες ή 1.  



INSERT INTO department (DepartmentName, langId, InstitutionId, SecondInstitutionId) VALUES ('Diidrumatiko TUC-Pan/mio Krhths', 1, 15, 16);

////////////////////

ALTER TABLE school
CHARACTER SET utf8
COLLATE utf8_general_ci;

SET NAMES utf8;
SET collation_connection = utf8_unicode_ci;



/////* SOS *////////////

ΜΟΛΙΣ ΕΚΑΝΑ ΑΥΤΟ ΛΥΘΗΚΕ ΤΟ ΠΡΟΒΛΗΜΑ ΜΕ ΤΑ ΕΛΛΗΝΙΚΑ!!

ALTER DATABASE perigrammata_db CHARACTER SET utf8 COLLATE utf8_general_ci;

/////* SOS *////////////

