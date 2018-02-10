<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Script</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lobster');
        @import url('https://fonts.googleapis.com/css?family=Itim');
        h1{
          font-size : 60px;
          font-family: 'Lobster', cursive;
          color: #1de9b6;
        }
        body{
          display : flex;
          flex-wrap : wrap;
          justify-content : center;
          align-items: center;
          background-color: #00897b;
          font-size : 40px;
          color: #4fc3f7;
        }
        input#submit, input#submit:hover{
          padding: 5px 15px;
          background-color: white;
          font-family: 'Itim', cursive;
          border-radius: 12px;
          border: 2px solid;
          font-size: 18px;
        }
        input#submit:hover{
          background-color: #4CAF50;
          border-radius: 12px;
          border: 2px solid #4CAF50;
        }

        .box{
          text-align: center;
          font-family: 'Itim', cursive;
          font-size : 30px;
          display : flex;
          justify-content : center;
          align-items: center;
          border: 5px solid #00e676;
          background-color:lightyellow;
          margin:50px;
          padding: 10px;
          width: 100%;
        }
        .contain{
          display : flex;
          flex-wrap : wrap;
          align-items: center;
          justify-content : center;
          /* border: 5px solid #1f1f1f; */
          border-style: ridge;
          border-color: #ff1744;
          border-width: 25px;
          background-color:lightyellow;
          margin:50px;
          padding: 10px;
          width: 80%;
          height: 120%;
        }
        #mainselection select {
          border: 0;
          color: #EEE;
          background: transparent;
          font-size: 20px;
          font-weight: bold;
          padding: 2px 10px;
          width: 100%;
          /**width: 50%;*/
          *background: #58B14C;
          -webkit-appearance: none;
        }
        div#mainselection {
          display : flex;
          flex-wrap : wrap;
          justify-content : center;
          align-items: center;
          overflow:hidden;
          width:100%;
          -moz-border-radius: 9px 9px 9px 9px;
          -webkit-border-radius: 9px 9px 9px 9px;
          border-radius: 9px 9px 9px 9px;
          box-shadow: 1px 1px 11px #330033;
          background: #58B14C url("http://i62.tinypic.com/15xvbd5.png") no-repeat scroll 98% center;
        }
        div#form{
          justify-content : center;
          align-items: center;
          text-align: center;
        }
    </style>
  </head>
  <body>
    <?php
      if(isset($_POST['type'])){
        $selected_val = $_POST['type'];  // Storing Selected Value In Variable
      }
      echo 'console.log(46)';
    ?>
    <div class="contain">
      <form method="post" action="">Select choice what you want to calculate
        <div id="mainselection" class="">
          <select onchange="this.form.submit();" name="type">
            <option selected disabled>Select here</option>
            <option value="BMI">BMI</option>
            <option value="BMR">BMR</option>
            <option value="Cholesterol">Cholesterol</option>
          </select>
        </div>
      </form>
      <?php
        echo '<div style="width:100%;text-align:center">You have selected :' . $selected_val . '</div>';  // Displaying Selected Value
        if ($selected_val == "BMI"){
          $form = '<div id="form"><form method="post">Body Mass Index (BMI)<br>
          ส่วนสูง/เซนติเมตร : <input type="text" name="height"><br>
          น้ำหนัก/กิโลกรัม : <input type="text" name="weight"><br>
          <input id="submit" type="submit" name="submit" value="Calculate">
                  </form></div>';
        } else if ($selected_val == "BMR"){
          $form = '<div id="form"><form method="post">Body Mass Index (BMR)<br>
          ส่วนสูง/เซนติเมตร : <input type="text" name="height"><br>
          น้ำหนัก/กิโลกรัม : <input type="text" name="weight"><br>
          <input id="submit" type="submit" name="submit" value="Calculate">
                  </form></div>';
        } else {
          $form = '<div id="form"><form method="post">Body Mass Index (Cholesterol)<br>
          ส่วนสูง/เซนติเมตร : <input type="text" name="height"><br>
          น้ำหนัก/กิโลกรัม : <input type="text" name="weight"><br>
          <input id="submit" type="submit" name="submit" value="Calculate">
                  </form></div>';
        }

        if (isset($_POST['height']) && isset($_POST['weight'])){
          $height = $_POST['height'];
          $weight = $_POST['weight'];
          $result = $weight / (($height/100)**2);
          echo 'Your result : ' . $result;
        }

        echo $form;
      ?>
    </div>
  </body>
</html>
