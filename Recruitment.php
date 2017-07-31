<!DOCTYPE HTML>
<html>
<head>
    <title>Recruitment Form</title>
    <style>
        #header
        {
            width: 100%;
            background-color: #f7f7f8;
            border-bottom: 1px solid #ececec;
            height: 41px;
            overflow: hidden;
            z-index: 1002;
            transition: left .4s cubic-bezier(.94,.06,.32,.95);
            top: 0;
            left: 0;
            text-align: center;
            padding-top: 18px;
            font-weight: 20 ;

        }
        #container{
            background-color:#ececec;
            font-family:Avenir Next W01,Avenir Next,Helvetica Neue,sans-serif;
            background-color: #fff
        }
        #heading
        {
            text-align: center;
            color: #aaa;
            font-family:Avenir Next W01,Avenir Next,Helvetica Neue,sans-serif;
        }
        #content
        {
            border: 1px solid #ccc;
            background-color: #fff;
            padding-left: 5%;
        }
        #elements
        {
            padding-bottom: 10px;
            padding-top: 10px;
        }
        input:not[type="radio"] {
            height: 25px;
            width: 188px;
            font-size: 15px;
        }
    </style>
</head>
<body id="container">
<div id="header">
    <b>JOB RECRUITMENT FORM</b>

    <?php 
    if(isset($_GET['msg']))
    if($_GET['msg']==1)
    {
        echo "<br>";
        echo "<div style='color:#008000'>Successfully applied!</div>";
    } ?>
    
</div>
    <form method="POST" action="RecruitmentApi.php" onsubmit="return validate(this)">
        <h2 id="heading">Personal Details</h2>
        <div id="content">
            <div id="rows">
                <div id="elements">
                    First Name: <input id="fname" type="text" name="fname" >
                </div>
                <div id="elements">
                    Second Name: <input id="lname" type="text" name="lname" >
                </div>
            </div>
            <div id="rows">
                <div id="elements">
                    Gender:
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Other">Other
                </div>
                <div id="elements">
                    Date of Birth:
                    <input type="Date" name="bday">
                </div>
                <div id="elements">
                    Blood group:
                    <select name="blood">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>
            <div id="rows">
                <div id="elements">
                Address:
                <textarea rows="3" cols="25" name='address'></textarea>
                </div>
                <div id="elements">
                Contact:
                <input type="number" name="mobile">
                </div>
                <div id="elements">
                Email:
                <input type="Email" name="email">
                </div>
            </div>
        </div>

        <h2 id="heading">Educational Qualification</h2>
        <div id="content">
            <b>Class 10:</b><br>
            Percentage: <input type="text" name="schoolper">
            School:<input type="text" name="schoolname">
            Year of Passing:
            <select name="schoolpass" >
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
            </select>
            <br>
            <b>Class 12:</b><br>
            Percentage: <input type="text" name="highper">
            School:<input type="text" name="highschoolname">
            Year of Passing:
            <select name="highschoolpass">
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
            </select>
            <br>
            <b>Bachelor:</b><br>
            Course:
            <select name="course">
                <option value="btech">BTech</option>
                <option value="be">BE</option>
                <option value="bpharma">BPharma</option>
                <option value="bsc">BSc</option> 
            </select>
            Percentage:<input type="text" name="collegeper">
            College/Institute: <input type="text" name="college">
            Year of Passing:
            <select name="yearpass">
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
            </select>

            <br>
            Master:<br>
            Percentage:<input type="text" name="masterper">
            College/Institute: <input type="text" name="col1">
            Year of Passing:
            <select name="colyr">
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
            </select>
        </div>
        <h2 id="heading">Work Experience</h2>
        <div id="content">
        Company:<input type="text" name="comp">
        Designation:<input type="text" name="desig">
        <br>
        Years of experience:
        <select name=y3>
            <option value="3">3 years</option>
            <option value="2">2 years</option>
            <option value="1">1 year</option>
        </select>
        Current CTC:<input type="number" name="ctc">
        Expected CTC:<input type="number" name="exp">
        </p>
        </div>
    <input type="submit" value="submit" >
</form>
<script type="text/javascript">
    function validate(form)
    {
        
        if (form.fname.value=="")
        {
            return false;
        }
        if(form.lname.value=="")
        {
            return false;
        }

    }
</script>

</body>
</html>