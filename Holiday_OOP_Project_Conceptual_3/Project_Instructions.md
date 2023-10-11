# Project: Blood Bank Management Application

## The system will manage blood donors, perform blood tests, and categorize donors by their blood groups.

## Follow the provided instructions below to complete the project:

### Part 1: Abstract Class `BloodDonor`

1. Begin by creating an abstract class called `BloodDonor`. This class represents individuals willing to donate blood and should include the following properties and methods:

   - Properties:

     - `$name` (string): The name of the donor.
     - `$bloodGroup` (string): The donor's blood group (e.g., "A+").
     - `$age` (int): The donor's age.

   - Constructor:

     - Create a constructor method that takes parameters for `$name`, `$bloodGroup`, and `$age` to initialize the properties.

   - Abstract Method:

     - Declare an abstract method `donateBlood()`, which will be implemented differently in subclasses.

   - Methods:
     - `getBloodGroup()`: A method that returns the donor's blood group.
     - `displayDonorInfo()`: A method to display the donor's information, including name, blood group, and age.
     - `getName()`: A method that returns the donor's name.

### Part 2: Interface `BloodBankInterface`

2. Create an interface called `BloodBankInterface` to define methods that a blood bank should implement. This interface should include the following methods:
   - `receiveBlood(BloodDonor $donor)`: Receives blood from a donor (parameter).
   - `getDonorsByBloodGroup($bloodGroup)`: Retrieves donors with a specific blood group (parameter).

### Part 3: Trait `BloodTestingTrait`

3. Develop a trait called `BloodTestingTrait` that includes the following method:
   - `testBloodGroup(BloodDonor $donor)`: Simulates a blood test for a donor's blood group, displaying the result.

### Part 4: Concrete Class `BloodBank`

4. Implement a concrete class `BloodBank` that implements the `BloodBankInterface`. This class should also use the `BloodTestingTrait`. It should include the following properties and methods:

   - Properties:

     - `$donors` (array): An array to store blood donors.

   - Methods:
     - `receiveBlood(BloodDonor $donor)`: Adds a donor to the `$donors` array and displays a message indicating the blood received.
     - `getDonorsByBloodGroup($bloodGroup)`: Searches for and returns an array of donors with the specified blood group.
     - `displayDonors()`: Displays the information of all donors, including blood test results, by iterating through the `$donors` array.

### Part 5: Concrete Classes `VolunteerDonor` and `ProfessionalDonor`

5. Create two concrete classes that extend the `BloodDonor` abstract class:

   - `VolunteerDonor`: Represents a volunteer blood donor. Implement the `donateBlood()` method to display a message indicating that the donor has donated blood voluntarily.

   - `ProfessionalDonor`: Represents a professional blood donor. Implement the `donateBlood()` method to display a message indicating that the donor has donated blood professionally.

### Part 6: Demonstration

6. Instantiate objects for `VolunteerDonor` and `ProfessionalDonor`, and add them to a `BloodBank` object using the `receiveBlood` method.

7. Use the `displayDonors` method to display the information of all donors and perform blood tests for each donor using the `BloodTestingTrait`.

8. Retrieve donors with a specific blood group using the `getDonorsByBloodGroup` method.

9. Demonstrate polymorphism by creating an array of different donors (mix of `VolunteerDonor` and `ProfessionalDonor` objects) and iterating through the array to call the `donateBlood` method, which should display the appropriate message based on the donor type.
