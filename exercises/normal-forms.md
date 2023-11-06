# TABLE 1: Patient Dental Appointment

### After Normalization 

| staffNo    | patientNo     | appointment_date  | appointment_time | surgeryNo  |    
| ---------- | ------------- | ----------------- | ---------------- | ---------- |
| S1011      | P100          | 12-Aug-03         | 10.00            |  S10       |
| S1011      | P105          | 13-Aug-03         | 12.00            |  S15       |
| S1024      | P108          | 12-Sept-03        | 10.00            |  S10       |
| S1024      | P108          | 14-Sept-03        | 10.00            |  S10       |
| S1032      | P105          | 14-Oct-03         | 16.00            |  S15       |
| S1032      | P100          | 15-Oct-03         | 18.00            |  S13       |

| staffNo    | dentistName   |      
| ---------- | ------------- |
| S1011      | Tonny Smith   |
| S1024      | Helen Pearson |
| S1032      | Robin Plevin  |

| patientNo  | patientName   |      
| ---------- | ------------- |
| P100       | Gillian White |
| P105       | Jill Bell     |
| P108       | Ian Mackay    |
| P110       | John Walker   |

---
---

#  TABLE 2: Employees of InstantCover and their contracts to work at hotels

### After Normalization 

| NIN        | contractNo    | hoursPerWeek |  hotelNo   |    
| ---------- | ------------- | ------------ | ---------- |
| 113567WD   | C1024         | 16           |  H25       |
| 234111XA   | C1024         | 24           |  H25       |
| 712670YD   | C1035         | 28           |  H4        |
| 113567WD   | C1025         | 16           |  H4        |


| NIN        | eName         |      
| ---------- | ------------- |
| 113567WD   | John Smith    |
| 234111XA   | Diane Hocine  |
| 712670YD   | Sarah White   |


| hotelNo    | hotelLocation |      
| ---------- | ------------- |
| H25        | Edinburgh     |
| H4         | Glasgow       |

---
---

# TABLE 3

### After Normalization

| EMPLOYEE_ID    | JOB_CODE     | STATE_CODE |   
|----------------|--------------|------------|   
| E001           | J01          | 26         |
| E001           | J02          | 26         | 
| E002           | J02          | 56         |
| E002           | J03          | 56         | 
| E003           | J01          | 56         |  

| EMPLOYEE_ID    | NAME        |      
| -------------- | ----------- |
| E001           | Alice       |
| E002           | Bob         |    
| E003           | Alice       |

| JOB_CODE       | JOB         |      
| -------------- | ----------- |
| J01            | Chef        |
| J02            | Waiter      |    
| J03            | Bartender   |

| STATE_CODE     | HOME_STATE  |      
| ------------   | ---------   |
| 26             | Michigan    |
| 56             | Wyoming     |   

---
---

# TABLE 4

### After Normalization

| GenreID     | Genre                   |      
| ---------   | ---------------------   |
| 1           | Science Fiction         |
| 2           | Poetry                  |
| 3           | Librabry Fiction        |
| 4           | Religious Autobiography |

| AuthorID    | Author                  | Author Nationality |     
| ---------   | ---------------------   | ------------------ |
| 1           | Jules Verne             | French             |
| 2           | Walt Whitman            | American           |
| 3           | Leo Tolstoy             | Russian            |

| Book                                  | GenreID    | AuthorID |     
| ------------------------------------- | ---------- | -------- |
| Twenty Thousand Leagues Under The Sea | 1          | 1        |
| Journey to the Center of the Earth    | 1          | 1        |
| Leaves of Grass                       | 2          | 2        |
| Anna Karenina                         | 3          | 3        |
| A Confession                          | 4          | 3        |

---
---

# Table 5

### After Normalization

| UnitID    |  StudentID         |  Date        |  TutorID  |  
| --------- | ------------------ | ------------ | --------- | 
| U1        | St1                | 23.02.03     | Tut1      |
| U2        | St1                | 18.11.02     | Tut3      |
| U1        | St4                | 23.02.03     | Tut1      |
| U5        | St2                | 05.05.03     | Tut3      |
| U4        | St2                | 04.07.03     | Tut5      |

| UnitID    |  Topic             |  Room              |  Book           |  
| --------- | ------------------ | ------------------ | --------------- |
| U1        | GMT                | 629                | Deumlich        |
| U2        | Gln                | 631                | Zehnder         |
| U5        | PhF                | 632                | Dummlers        |
| U4        | AVQ                | 621                | SwissTopo       |

| TutorID    |  TutEmail          |   
| ---------  | ------------------ |
| Tut1       | tut1@fhbb.ch       |
| Tut3       | tut3@fhbb.ch       |
| Tut5       | tut5@fhbb.ch       |













