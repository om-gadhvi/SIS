<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Payment Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="PaymentUi.css"/>
  </head>
  <body>
    <section class="container">
      <header>Payment Details</header>
      <form action="pay.php" method="post" class="form" autocomplete="off">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="customername" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="email" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" autocomplete="off" placeholder="Enter phone number" name="contactno" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <!-- <label>Identificatin Numbers :</label>
          <input type="text" placeholder="Registration Number*" required />
          <input type="text" placeholder="Smart Card Number*" required /> -->
          <!-- <div class="column">
            <div class="select-box">
              <select>
                <option hidden>Payment Category*</option>
                <option>Document Verification</option>
                <option>EXAM FEES</option>
                <option>EXAM FEES-(KT)</option>
              </select>
            </div>
            <input type="text" placeholder="Mobile Number*" required />
          </div> -->
          <!-- <div class="column">
            <input type="text" placeholder="Total Amount" required />
            <input type="text" placeholder="Remarks" required />
          </div> -->
        </div>
        <div class="input-box address">
          <label>Identification Numbers :</label>
          <input type="text" placeholder="Registration Number*" name="registration" required />
          <input type="text" placeholder="Smart Card Number*" name="smartcard" required />
        <div class="select-box">
          <select>
            <option hidden>Category*</option>
            <option>OPEN</option>
            <option>SC/ST</option>
            <option>OTHER</option>
          </select>
        </div>
        <div class="select-box">
          <select>
            <option hidden>Semester*</option>
            <option>SEM-I</option>
            <option>SEM-II</option>
            <option>SEM-III</option>
            <option>SEM-IV</option>
            <option>SEM-V</option>
            <option>SEM-VI</option>
            <option>SEM-VII</option>
            <option>SEM-VIII</option>
          </select>
        </div>
        <div class="select-box" >
          <select name="examfee">
            <option hidden>Select Exam Fees*</option>
            <option>Academic Fee</option>
            <option>COPY CASE FINE RS 5000</option>
            <option>Photo Copy Of One Subject Rs 100</option>
            <option>Photo Copy Of Two Subject Rs 200</option>
            <option>Photo Copy Of Three Subject Rs 300</option>
            <option>Photo Copy Of Four Subject Rs400</option>
            <option>Photo Copy Of Five Subject Rs 500</option>
            <option>Photo Copy Of Six Subject Rs 600</option>
            <option>Photo Copy Of Seven Subject Rs 700</option>
            <option>Re Evaluation Of One Subject Rs 500</option>
            <option>Re Evaluation Of Two Subject Rs 1000</option>
            <option>Re Evaluation Of Three Subject Rs 1500</option>
            <option>Re Evaluation Of Four Subject Rs 2000</option>
            <option>Re Evaluation Of Five Subject Rs 2500</option>
            <option>Re Evaluation Of Six Subject Rs 3000</option>
            <option>Re Evaluation Of Seven Subject Rs 3500</option>
          </select>
        </div>
        <div class="column">
          <input type="text" placeholder="Total Amount" name="price" required />
          <input type="text" placeholder="Remarks" required />
        </div>
       
        <button type="submit" name="submit">Proceed To Pay</button>
       
      </form>
    </section>
  </body>
</html>
