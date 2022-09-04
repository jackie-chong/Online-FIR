<!DOCTYPE html>
<html>

<head>
    <title>TRIPURA ONLINE F.I.R WEBSITE</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <!---======================================nav bar===============================================-->
    <header class="header" id="header">
        <div class="navbar">
            <img src="logo/ashok sthamba.jpg" class="nav_logo">
            <div class="logo">
                <h3>Government of tripura</h3>
                <p>Tripura police</p>
            </div>
            <ul>
                <li><a href="home.html">HOME</a></li>
                <li><a href="firstatus.html">FIR STATUS</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>
    </header>
    <!------------------------------HOME--------------------------------->
    <!---------------------------------------------PERSONAL DETAILS--------------------------------------->
    <form id="personal_details" method="post" action="fir_save.php" enctype="multipart/form-data">
        <div class="personal_details" id="personal_details">

            <table>
                <tr>
                    <h1>
                        PERSONAL DETAILS
                    </h1>
                </tr>
                <tr>
                    <p>
                        Full Name :
                    </p>
                    <li>
                        <input type="text" name="fullname">
                    </li>
                    <p>
                        Gender :
                    </p>
                    <li>
                        <input type="radio" name="GENDER" value="male">Male
                        <input type="radio" name="GENDER" value="female">Female
                        <input type="radio" name="GENDER" value="others">Others
                    </li>
                    <p>
                        Age :
                    </p>
                    <li>
                        <input type="number" name="age">
                    </li>
                </tr>

            </table>

        </div>
        <br><br>
        <!--------------------------------------------------------ADDRESS--------------------------------------------------->
        <div class="address" id="address">

            <table>
                <tr>
                    <h1>
                        ADDRESS
                    </h1>
                </tr>
                <tr>
                    <p>
                        Contact Address :
                    </p>
                    <li>
                        <input type="text" name="address">
                    </li>
                    <p>
                        Pin :
                    </p>
                    <li>
                        <input type="number" name="pincode">
                    </li>


                </tr>
            </table>


        </div>
        <br>
        <!-----------------------------CONTACT DETAILS---------------------------------->
        <div class="contact_details" id="contact_details">

            <table>
                <tr>
                    <h1>
                        CONTACT DETAILS
                    </h1>
                </tr>
                <tr>
                    <p>
                        Mobile No :
                    </p>
                    <li>
                        <input type="number" maxlength="10" name="mobile">
                    </li>
                    <p>
                        Email :
                    </p>
                    <li>
                        <input type="email" name="email">
                    </li>
                    
                </tr>
            </table>


        </div>
        <br>
        <!------------------------------------------IDENTITY ATTACHMENT--------------------------------->
        <div class="identity" id="identity">

            <table>
                <tr>
                    <h1>
                        IDENTITY ATTACHMENT
                    </h1>
                </tr>
                <tr>
                    <p>
                        Identity Type :
                    </p>
                    <li>
                        <select id="identity_type" style="width: 57%;" name="Identity_type">
                            <option value selected>-SELECT-</option>
                            <option value="passport">PASSPORT</option>
                            <option value="aadhar number">Aadhar Number</option>
                            <option value="pan card">PAN Card</option>
                            <option value="employee card">Employee Card</option>
                            <option value="voter id">Voter Id</option>
                            <option value="other">Other</option>
                    </li>
                </tr>
                <tr>
                    <p>
                        Identity Detail :
                    </p>
                    <li>
                        <input type="text" name="Identity_detail">
                    </li>
                </tr>
                <tr>
                    <li>
                        <input type="file"   name="choosefile">
                    </li>
                </tr>
            </table>


        </div>
        <br>
        <!----------------------------PLACE OF OCCURANCE-------------------------->
        <div class=" occurance" id="occurance">

            <table>
                <tr>
                    <h1>
                        PLACE OF OCCURANCE
                    </h1>
                </tr>
                <tr>
                    <p>
                        District :
                    </p>
                    <li>
                        <select  id="district_type" style="width: 57%;" name="district">
                            <option value selected>-SELECT-</option>
                            <option value="gomati">GOMATI</option>
                            <option value="khowai">KHOWAI</option>
                            <option value="sipahijala">SIPAHIJALA</option>
                            <option value="unakoti">UNAKOTI</option>
                            <option value="dhalai">DHALAI</option>
                            <option value="north tripura">NORTH TRIPURA</option>
                            <option value="south tripura">SOUTH TRIPURA</option>
                            <option value="west tripura">WEST TRIPURA</option>

                    </li>
                </tr>
                <tr>
                    <p>
                        Place Of Occurance :
                    </p>
                    <li>
                        <input type="text" name="place_of_occurance">
                    </li>
                </tr>

            </table>


        </div>
        <br>
        <!----------------------------------COMPLAIN DETAILS-------------------------------->
        <div class="complain_details" id="complain_details">
            
                <table>
                    <tr>
                        <h1>
                            COMPLAIN DETAILS
                        </h1>
                    </tr>
                    <tr>
                        <p>
                            Topic :
                        </p>
                        <li>
                            <select  id="topic_type" style="width: 57%;" name="topic">
                                <option value selected>-SELECT-</option>
                                <option value="crime related">CRIIME RELATED</option>
                                <option value="cyber related">CYBER RELATED</option>
                                <option value="others/miscellaneous">OTHERS/MISCELLANEOUS</option>
                        </li>
                    </tr>
                    <tr>
                        <p>
                            Subject :
                        </p>
                        <li>
                            <input type="text" id="subject" maxlength="200" value="" class="form-control input-sm" style="width: 50% !important; height: 30%;" required="" name="subject">
                        </li>
                    </tr>
                    <tr>
                        <p>
                            Details :
                        </p>
                        <li>
                            <input type="text" maxlength="1000" class="form-control input-sm" style="width: 50% !important; height: 100%;" name="details">
                        </li>
                    </tr>
                    <tr>
                        <li>
                            <input type="file" name="choosefile">
                        </li>
                    </tr>
                </table>

        </div>
        <br>

        <br>
        <!-------------------------SUBMIT/CANCEL---------------------->
        <div class="submit_cancel" id="submit_cancel">

            
          <div class="submit">
                <table>
                    <tr>
                        <li>
                        <input id="reg" type="submit" value="Register" class="btn btn-success" />
                        </li>
                    </tr>
                </table>
            </div>
        
         <div class="cancel">
                <table>
                    <tr>
                        <li>
                            <a href="home.html">
                                <input class="button btn btn-danger" type="button" name="cancel" value="Cancel">
                            </a>
                        </li>
                    </tr>
                </table>
            </div>
 </form>
</div>
</body>

</html>