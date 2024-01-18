# Below is a data of parts to build a computer.

| PartName           | PartType         | Brand        | Compatibility | Category       | Price (USD) | Stock  |     
|--------------------|------------------|--------------|---------------|----------------|-------------|--------|     
| Core i9            | Processor        | Intel        | Intel & AMD   | Processor      | 300         | 50     |     
| Ryzen 9            | Processor        | AMD          | Intel & AMD   | Processor      | 250         | 40     |     
| Vengence 8GB       | RAM              | Corsair      | Universal     | Memory         | 80          | 100    |     
| Hyper X 16GB       | RAM              | Kingston     | Universal     | Memory         | 70          | 80     |     
| ROG Strix          | Motherboard      | ASUS         | Intel & AMD   | Motherboard    | 150         | 30     |     
| MPG Gaming         | Motherboard      | MSI          | Intel & AMD   | Motherboard    | 130         | 25     |     
| GeForce RTX 3080   | GPU              | NVIDIA       | Universal     | Graphics       | 400         | 60     |     
| Radeon RX 6800 XT  | GPU              | AMD          | Universal     | Graphics       | 350         | 50     |     
| 970 EVO            | Storage (SSD)    | Samsung      | Universal     | Storage        | 120         | 75     |     
| Barracuda          | Storage (HDD)    | Seagate      | Universal     | Storage        | 60          | 100    |     
| SuperNOVA          | PSU              | EVGA         | Universal     | Power Supply   | 80          | 40     |     
| H510i              | Case             | NZXT         | Universal     | Case           | 100         | 20     |     
| Hyper 212          | Cooler           | Cooler Master| Universal     | Cooling        | 50          | 30     |     
| UltraSharp         | Monitor          | Dell         | Universal     | Display        | 200         | 50     |     
| 27GL83A-B          | Monitor          | LG           | Universal     | Display        | 250         | 60     |     
| G Pro              | Keyboard         | Logitech     | Universal     | Peripheral     | 60          | 90     |     
| BlackWidow         | Keyboard         | Razer        | Universal     | Peripheral     | 80          | 70     |     
| G502               | Mouse            | Logitech     | Universal     | Peripheral     | 40          | 120    |     
| Omen Photon        | Mouse            | HP           | Universal     | Peripheral     | 30          | 80     |     
          
---     
---

### After Normalization


| PartID           | PartName           | PartTypeID    |  PartBandID   | PartPrice (USD) | PartStock  | 
|------------------|--------------------|---------------|---------------|-----------------|------------| 
| 1                | Core i9            | 1             | 1             | 300             | 50         | 
| 2                | Ryzen 9            | 1             | 2             | 250             | 40         | 
| 3                | Vengence 8GB       | 2             | 3             | 80              | 100        | 
| 4                | Hyper X 16GB       | 2             | 4             | 70              | 80         | 
| 5                | ROG Strix          | 3             | 5             | 150             | 30         | 
| 6                | MPG Gaming         | 3             | 6             | 130             | 25         | 
| 7                | GeForce RTX 3080   | 4             | 7             | 400             | 60         | 
| 8                | Radeon RX 6800 XT  | 4             | 2             | 350             | 50         | 
| 9                | 970 EVO            | 5             | 8             | 120             | 75         | 
| 10               | Barracuda          | 6             | 9             | 60              | 100        | 
| 11               | SuperNOVA          | 7             | 10            | 80              | 40         | 
| 12               | H510i              | 8             | 11            | 100             | 20         | 
| 13               | Hyper 212          | 9             | 12            | 50              | 30         | 
| 14               | UltraSharp         | 10            | 13            | 200             | 50         | 
| 15               | 27GL83A-B          | 10            | 14            | 250             | 60         | 
| 16               | G Pro              | 11            | 15            | 60              | 90         | 
| 17               | BlackWidow         | 11            | 16            | 80              | 70         | 
| 18               | G502               | 12            | 15            | 40              | 120        | 
| 19               | Omen Photon        | 12            | 17            | 30              | 80         | 


---

| PartTypeID         | PartType         | PartCompatibilityID     | PartCategoryID         |
|--------------------|------------------|-------------------------|------------------------|
| 1                  | Processor        | 1                       |1                       |
| 2                  | RAM              | 2                       |2                       |
| 3                  | Motherboard      | 1                       |3                       |
| 4                  | GPU              | 2                       |4                       |
| 5                  | Storage (SSD)    | 2                       |5                       |
| 6                  | Storage (HDD)    | 2                       |5                       |
| 7                  | PSU              | 2                       |6                       |
| 8                  | Case             | 2                       |7                       |
| 9                  | Cooler           | 2                       |8                       |
| 10                 | Monitor          | 2                       |9                       |
| 11                 | Keyboard         | 2                       |10                      |
| 12                 | Mouse            | 2                       |10                      |

---

| PartBrandID | PartBrand        |
|-------------|------------------|
| 1           | Intel            |
| 2           | AMD              |
| 3           | Corsair          |
| 4           | Kingston         |
| 5           | ASUS             |
| 6           | MSI              |
| 7           | NVIDIA           |
| 8           | Samsung          |
| 9           | Seagate          |
| 10          | EVGA             |
| 11          | NZXT             |
| 12          | Cooler Master    |
| 13          | Dell             |
| 14          | LG               |
| 15          | Logitech         |
| 16          | Razer            |
| 17          | HP               |

---

| PartCompatibilityID  | PartCompatibility | 
|----------------------|-------------------|
| 1                    | Intel & AMD       |
| 2                    | Universal         | 

---

| PartCategoryID   | PartCategory   |
|------------------|----------------|
| 1                | Processor      |
| 2                | Memory         |
| 3                | Motherboard    |
| 4                | Graphics       |
| 5                | Storage        |
| 6                | Power Supply   |
| 7                | Case           |
| 8                | Cooling        |
| 9                | Display        |
| 10               | Peripheral     |


