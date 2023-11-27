# Below is a data of parts to build a computer.

| ID     | PartName         | BrandName    | Compatibility | Category       | Price (USD) | Stock  | Warranty    |
|--------|------------------|--------------|---------------|----------------|-------------|--------|-------------|
| 1      | CPU              | Intel        | Intel & AMD   | Processor      | 300         | 50     | 3 years     |
| 2      | CPU              | AMD          | Intel & AMD   | Processor      | 250         | 40     | 2 years     |
| 3      | RAM              | Corsair      | Universal     | Memory         | 80          | 100    | Lifetime    |
| 4      | RAM              | Kingston     | Universal     | Memory         | 70          | 80     | 5 years     |
| 5      | Motherboard      | ASUS         | Intel & AMD   | Motherboard    | 150         | 30     | 2 years     |
| 6      | Motherboard      | MSI          | Intel & AMD   | Motherboard    | 130         | 25     | 3 years     |
| 7      | GPU              | NVIDIA       | Universal     | Graphics       | 400         | 60     | 2 years     |
| 8      | GPU              | AMD          | Universal     | Graphics       | 350         | 50     | 3 years     |
| 9      | Storage (SSD)    | Samsung      | Universal     | Storage        | 120         | 75     | 5 years     |
| 10     | Storage (HDD)    | Seagate      | Universal     | Storage        | 60          | 100    | 2 years     |
| 11     | PSU              | EVGA         | Universal     | Power Supply   | 80          | 40     | NA          |
| 12     | Case             | NZXT         | Universal     | Case           | 100         | 20     | NA          |
| 13     | Cooler           | Cooler Master| Universal     | Cooling        | 50          | 30     | NA          |
| 14     | Monitor          | Dell         | Universal     | Display        | 200         | 50     | NA          |
| 15     | Monitor          | LG           | Universal     | Display        | 250         | 60     | NA          |
| 16     | Keyboard         | Logitech     | Universal     | Peripheral     | 60          | 90     | NA          |
| 17     | Keyboard         | Razer        | Universal     | Peripheral     | 80          | 70     | NA          |
| 18     | Mouse            | Logitech     | Universal     | Peripheral     | 40          | 120    | NA          |
| 19     | Mouse            | HP           | Universal     | Peripheral     | 30          | 80     | NA          |
 
---
---
### After Normalization


| PartID    | BrandID   | Price (USD) | Stock  | Warranty    |
|-----------|-----------|-------------|--------|-------------|
| 1         | 1         | 300         | 50     | 3 years     |
| 1         | 2         | 250         | 40     | 2 years     |
| 2         | 3         | 80          | 100    | Lifetime    |
| 2         | 4         | 70          | 80     | 5 years     |
| 3         | 5         | 150         | 30     | 2 years     |
| 3         | 6         | 130         | 25     | 3 years     |
| 4         | 7         | 400         | 60     | 2 years     |
| 4         | 2         | 350         | 50     | 3 years     |
| 5         | 8         | 120         | 75     | 5 years     |
| 6         | 9         | 60          | 100    | 2 years     |
| 7         | 10        | 80          | 40     | NA          |
| 8         | 11        | 100         | 20     | NA          |
| 9         | 12        | 50          | 30     | NA          |
| 10        | 13        | 200         | 50     | NA          |
| 10        | 14        | 250         | 60     | NA          |
| 11        | 15        | 60          | 90     | NA          |
| 11        | 16        | 80          | 70     | NA          |
| 12        | 15        | 40          | 120    | NA          |
| 12        | 17        | 30          | 80     | NA          |

---

| PartID  | PartName         | CompatibilityID  | CategoryID  |     
|---------|------------------|------------------|-------------|
| 1       | CPU              | 1                | 1           |
| 2       | RAM              | 2                | 2           |
| 3       | Motherboard      | 1                | 3           |
| 4       | GPU              | 2                | 4           |
| 5       | Storage (SSD)    | 2                | 5           |
| 6       | Storage (HDD)    | 2                | 5           |
| 7       | PSU              | 2                | 6           |
| 8       | Case             | 2                | 7           |
| 9       | Cooler           | 2                | 8           |
| 10      | Monitor          | 2                | 9           |
| 11      | Keyboard         | 2                | 10          |
| 12      | Mouse            | 2                | 10          |

---

| BrandID | BrandName    |
|---------|--------------|
| 1       | Intel        |
| 2       | AMD          |
| 3       | Corsair      |
| 4       | Kingston     |
| 5       | ASUS         |
| 6       | MSI          |
| 7       | NVIDIA       |
| 8       | Samsung      |
| 9       | Seagate      |
| 10      | EVGA         |
| 11      | NZXT         |
| 12      | Cooler Master|
| 13      | Dell         |
| 14      | LG           |
| 15      | Logitech     |
| 16      | Razer        |
| 17      | HP           |

---

| CompatibilityID  | Compatibility | 
|------------------|---------------|
| 1                | Intel & AMD   |
| 2                | Universal     | 

---

| CategoryID    | Category       |
|---------------|----------------|
| 1             | Processor      |
| 2             | Memory         |
| 3             | Motherboard    |
| 4             | Graphics       |
| 5             | Storage        |
| 6             | Power Supply   |
| 7             | Case           |
| 8             | Cooling        |
| 9             | Display        |
| 10            | Peripheral     |


