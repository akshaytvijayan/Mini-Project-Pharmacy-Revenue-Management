# Mini-Project-Pharmacy-Revenue-Management

## Setting Up the Development Environment

1. **Choose a Local Server Environment:** Select one among XAMPP, WAMP, or MAMP. These packages include PHP, Apache, MySQL, etc.
2. **Installation:** Download and install the chosen environment on your local machine following the provided instructions.
3. **Configuration:** Configure Apache, PHP, and MySQL settings based on your project requirements.

    Example Steps:
    ```bash
    Step 1...
    Step 2...
    ```

## Database Design

1. **Choose a Database Management System:** MySQL is commonly used, but any preferred system can be used.
2. **Design the Database Schema:** Identify entities like medications, patients, prescriptions, inventory, etc.
3. **Create Tables:** Using SQL, create tables for each identified entity.

    Example Tables:
    - `Medications`: `medication_id`, `name`, `description`, `manufacturer`, etc.
    - `Patients`: `patient_id`, `name`, `dob`, `address`, etc.
    - `Prescriptions`: `prescription_id`, `patient_id`, `medication_id`, `dosage`, `prescribed_date`, etc.
    - `Inventory`: `inventory_id`, `medication_id`, `quantity`, `expiry_date`, etc.
