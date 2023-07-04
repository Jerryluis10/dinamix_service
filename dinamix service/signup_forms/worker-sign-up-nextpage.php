<!DOCTYPE html>
<html>
<head>
  <title>worker Sign Up </title>
  <style>
    /* CSS styles for page 2 */
    /* CSS styles for page 2 */
body {
  font-family: Arial, sans-serif;
}

.form-container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-top: 5%;
}

h2 {
  text-align: center;
  color: #00A651;
}

.form-group {
  margin-bottom: 10px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
  font-size: 17px;
  padding: 10px;
}

.form-group input[type="checkbox"] {
  display: none;
}

.form-group input[type="checkbox"] + label {
  position: relative;
  padding-left: 25px;
  cursor: pointer;
}

.form-group input[type="checkbox"] + label:before {
  content: "";
  position: absolute;
  left: 0;
  top: 1px;
  width: 18px;
  height: 18px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.form-group input[type="checkbox"]:checked + label:before {
  background-color: #00A651;
}

.form-group input[type="checkbox"]:checked + label:after {
  content: "";
  position: absolute;
  left: 6px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid #fff;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}

.form-group button {
  width: 100%;
  padding: 10px;
  background-color: #00A651;
  border: none;
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
}

@media screen and (max-width: 1200px) {
  .form-container {
    max-width: 750px;
    margin: 0 auto;
    padding: 20px;
    margin-top: 2%;
  }

  h2 {
    font-size: 55px;
  }

  .form-group {
    margin-bottom: 15px;
    padding: 10px;
  }

  .form-group label {
    font-size: 35px;
    padding: 10px;
  }

  .form-group input[type="checkbox"] + label {
    font-size: 25px;
    padding-left: 30px;
  }

  .form-group input[type="checkbox"]:checked + label:before {
    width: 30px;
    height: 30px;
  }

  .form-group input[type="checkbox"]:checked + label:after {
    left: 10px;
    top: 12px;
    width: 10px;
    height: 20px;
  }

  .form-group button {
    line-height: 57px;
    font-size: 30px;
  }
}

    /* ... */
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Worker Sign Up</h2>
    <form action="process-signup.php" method="post">
      <div class="form-group">
        <label>Skills:</label>
        <div>
          <input type="checkbox" id="electronicsTechnicians" name="skill[]" value="Electronics Technicians">
          <label for="electronicsTechnicians">Electronics Technician</label>
        </div>
        <!-- Add the remaining checkbox options -->
        <div>
          <input type="checkbox" id="electricalTechnicians" name="skill[]" value="Electrical Technicians">
          <label for="electricalTechnicians">Electrical Technician</label>
        </div>
        <div>
          <input type="checkbox" id="softwaredeveloper" name="skill[]" value="Software Developer">
          <label for="softwaredeveloper">Software Developer</label>
        </div>
        <div>
          <input type="checkbox" id="hardwareengineer" name="skill[]" value="Hardware Engineer">
          <label for="hardwareengineer">Hardware Engineer</label>
        </div>
        <div>
          <input type="checkbox" id="circuitdesigner" name="skill[]" value="Circuit Designer">
          <label for="circuitdesigner">Circuit Designer</label>
        </div>
        <div>
          <input type="checkbox" id="installationtechnician" name="skill[]" value="Installation Technician">
          <label for="installationtechnician">Installation Technician</label>
        </div>
        <div>
          <input type="checkbox" id="homeautomationspecialis" name="skill[]" value="Home Automation Specialis">
          <label for="homeautomationspecialis">Home Automation Specialist</label>
        </div>
        <div>
          <input type="checkbox" id="customersupportrepresentative" name="skill[]" value="Industrial Automation">
          <label for="customersupportrepresentative">Customer Support Representative</label>
        </div>
        <div>
          <input type="checkbox" id="salesexecutive" name="skill[]" value="Sales Executive">
          <label for="salesexecutive">Sales Executive</label>
        </div>
        <div>
            <input type="checkbox" id="businessdevelopment" name="skill[]" value="Business Development">
            <label for="businessdevelopment">Business Development</label>
          </div>
        <div>
          <input type="checkbox" id="projectmanager" name="skill[]" value="Project Manager">
          <label for="projectmanager">Project Manager</label>
        </div>
        <div>
          <input type="checkbox" id="qualityassuranceengineer" name="skill[]" value="Quality Assurance Engineer">
          <label for="transportationLogistics">Quality Assurance Engineer</label>
        </div>
        <div>
          <input type="checkbox" id="rads" name="skill[]" value="R&D Specialist">
          <label for="rads">R&D Specialist</label>
        </div>
      </div>
      <div class="form-group">
        <button type="submit">Sign Up</button>
      </div>
    </form>
  </div>
</body>
</html>