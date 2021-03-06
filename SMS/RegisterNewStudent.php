<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href="assets/img/mwu-logo.png" rel= "icon"/>
    <style>
        h1 {
            color: rgba(28, 43, 75, 1);
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        img {
            display: block;
            margin: auto;
        }

        form {
            background-color: rgba(28, 43, 75, 1);
            color: white;
            border: 1px solid black;
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
            margin: auto; 
            width: 98%;
        }

        input,select {
            padding: 3px;
            margin: auto;
        }


        button {
            width: 70px;
            height: 28px;
            width: 80px;
            border: 1px solid black;
            font-weight: 650;
            font-size: small;
            /* cursor: pointer; */
        }
        #textalign{
            text-align: center;
        }

        /* td{
   style="height: 45px;" 
}      */
    </style>


</head>

<body>

    <!-- <img src="https://www.saylaniwelfare.com/public_html/images/saylani/Saylani-logo.png" alt="Loading..."> -->

    <img src="assets/img/mwu-logo.png" alt="icon" style="width:90px" align=""/>
    <h1> <U> <a href="index.php"></a> STUDENT REGISTRATION FORM </U> </h1>

    <form action="submit.html" method="POST" autocomplete="off" >
        <table >
            <tr>
                <td style="height: 45px;" width="175"> FIRST NAME</td>
                <td><input type="text" placeholder="Enter First Name" name="firstname" value="" maxlength="30" size="25" required pattern="[A-z]{1,30}" title="Enter Your First Name">
                     (max 30 characters a-z and A-Z)</td>
            </tr>
            <tr>
                <td style="height: 45px;"> LAST NAME</td>
                <td><input type="text" placeholder="Enter Last Name" name="lastname" value="" maxlength="30" size="25" required pattern="[A-z]{1,30}" title="Enter Your Last Name" >
                    (max 30 characters a-z and A-Z)</td>
            </tr>
            <tr>
                <td style="height: 45px;">DATE OF BIRTH</td>
                <td> <select name="day" required >
                        <option value="00"> &ensp; Day: &ensp; &ensp; </option>
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select name="month" required>
                        <option value="00"> &ensp;&ensp; Month: &ensp; &ensp; </option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>

                    <select name="year" required>
                        <option value="0000">&ensp; Year: &ensp; </option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                    </select> </td>
            </tr>
            <tr>
                <td style="height: 45px;">EMAIL</td>
                <td><input type="email" placeholder="Enter Email Address" name="email" value="" size="25" required></td>
            </tr>
            <tr>
                <td style="height: 45px;">MOBILE NUMBER</td>
                <td> <input type="text" placeholder="Enter Mobile Number" name="mobile" pattern="[0-9]{10}" maxlength="10" value=""
                        size="25" required title="Minimum 10 digits"> (10 digit number)</td>
            </tr>
            <tr>
                <td style="height: 45px;">GENDER</td>
                <td><label for="male">Male</label> <input id="male" type="radio" name="gender" value="Male" required>
                    <label for="female">Female</label><input id="female" type="radio" name="gender" value="Female" required></td>
            </tr>
            <tr>
                <td style="height: 45px;">ADDRESS</td>
                <td><textarea name="address" cols="45" rows="5" required></textarea> </td>
            </tr>
            <tr>
                <td style="height: 45px;">CITY </td>
                <td><input type="text" placeholder="Enter City Name" name="cityname" value="" maxlength="30" size="25" required pattern="[A-z]{1,30}" title="Enter Your City Name">
                    (max 30 characters a-z and A-Z)</td>
            </tr>
            <tr>
                <td style="height: 45px;">PINCODE</td>
                <td><input type="text" placeholder="Enter Pincode" name="pincode" value="" maxlength="6" size="25" pattern="[0-9]{6}" required title="Minimum 6 digits"> (6
                    digit number)</td>
            </tr>
            <tr>
                <td style="height: 45px;">STATE</td>
                <td><input type="text" placeholder="Enter State" name="state" value="" maxlength="30" size="25" required pattern="[A-z]{1,30}" title="Enter Your State Name"> (max 30
                    characters a-z and A-Z)</td>
            </tr>
            <tr>
                <td style="height: 45px;">COUNTRY</td>
                <td><input type="text" placeholder="Enter Country" name="country" value="" maxlength="15" size="25" required>
                </td>
            </tr>
          <!--  <tr>
                <td style="height: 45px;">HOBBIES</td>
                <td> <label for="Drawing">Drawing</label> <input id="Drawing" type="checkbox" name="drawing" >
                    <label for="Singing ">Singing </label> <input id="Singing " type="checkbox" name="singing ">
                    <label for="Dancing">Dancing</label> <input id="Dancing" type="checkbox" name="dancing">
                    <label for="Sketching">Sketching</label> <input id="Sketching" type="checkbox" name="sketching"><br>
                    <label for="Others">Others</label> <input id="Others" type="checkbox" name="others">
                    <input type="text" name="others" maxlength="20" size="20"><br><br>
                </td>
            </tr>          -->


            <!--  -->


            <tr>
                <table>
                    <tr>
                        <td rowpan="7" width="175">QUALIFICATION</td>
                        <td align="center">SI.No. </td>
                        <td align="center">Examination</td>
                        <td align="center">Board</td>
                        <td align="center">Percentage</td>
                        <td align="center">Year of Passing</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> 1 </td>
                        <td> SLC/SEE </td>
                        <td><input type="text" name="" value="" maxlength="10" size="25" required  id="textalign" pattern="[A-z]{1,10}" title="Fill minimum SLC/SEE Qualification & Enter Your Board Name"> </td>
                        <td><input type="text" name="" value="" maxlength="2" size="25" pattern="[0-9]{2}" required id="textalign" title="Minimum 2 decimal"></td>
                        <td><input type="text" name="" value="" maxlength="4" size="25" pattern="[0-9]{4}" required id="textalign" title="Minimum 4 decimal"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> 2 </td>
                        <td> Intermediate level </td>
                        <td><input type="text" name="" value="" maxlength="10" size="25" id="textalign" pattern="[A-z]{1,10}" title="Enter Your Board Name"> </td>
                        <td><input type="text" name="" value="" maxlength="2" size="25" pattern="[0-9]{2}" id="textalign" title="Minimum 2 decimal"></td>
                        <td><input type="text" name="" value="" maxlength="4" size="25" pattern="[0-9]{4}" id="textalign" title="Minimum 4 decimal"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> 3 </td>
                        <td> Graduation </td>
                        <td><input type="text" name="" value="" maxlength="10" size="25" id="textalign" pattern="[A-z]{1,10}" title="Enter Your Board Name"> </td>
                        <td><input type="text" name="" value="" maxlength="2" size="25" pattern="[0-9]{2}" id="textalign" title="Minimum 2 decimal"></td>
                        <td><input type="text" name="" value="" maxlength="4" size="25" pattern="[0-9]{4}" id="textalign" title="Minimum 4 decimal"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> 4 </td>
                        <td> Masters </td>
                        <td><input type="text" name="" value="" maxlength="10" size="25" id="textalign" pattern="[A-z]{1,10}" title="Enter Your Board Name"> </td>
                        <td><input type="text" name="" value="" maxlength="2" size="25" pattern="[0-9]{2}" id="textalign" title="Minimum 2 decimal"></td>
                        <td><input type="text" name="" value="" maxlength="4" size="25" pattern="[0-9]{4}" id="textalign" title="Minimum 4 decimal"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center">(10 char max)</td>
                        <td align="center">(upto 2 decimal)</td>
                        <td></td>
                    <tr>
                </table>
            </tr>

            <!--  -->



            <table>

                <tr>
                    <td width="175" style="height: 50px;">COURSES <br>APPLIED FOR</td>
                    <td><label for="CIVIL">CIVIL</label> <input id="CIVIL" type="radio" name="courses" value="CIVIL" required>
                        <label for="COMPUTER">COMPUTER</label><input id="COMPUTER" type="radio" name="courses" value="COMPUTER" required>
                        <label for="HYDROPOWER">HYDROPOWER</label><input id="HYDROPOWER" type="radio" name="courses" value="HYDROPOWER" required>
                        <label for="ELECTRONIC">ELECTRONIC</label><input id="ELECTRONIC" type="radio" name="courses" value="ELECTRONIC" required><br><br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td >
                        <button type="submit">Submit</button>
                        <button type="reset">Reset </button>
                    </td>
                 
                </tr>
            </table>

        </table>
    </form>

    <br>
    
</body>

</html>