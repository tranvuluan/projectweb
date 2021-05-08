<?php 
$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/inc/header.php';
?>
    <!-- Kết thúc header -->
    <!-- Content -->
    <div class="contact1">
        <div class="div1">
            <form>
                <legend style="font-size: 40px;">
                    CONTACT
                </legend>
                <p> Your Name: <br />
                    <input class="inputcontact" type="text">
                </p>
                <p> Phone Number: <br />
                    <input class="inputcontact" type="text">
                </p>
                <p> Email Address: <br />
                    <input class="inputcontact" type="text">
                </p>
                <p> Content: <br />
                    <textarea style="border-radius:10px;" cols="45" rows="6" name="lienhe">

                        </textarea>
                </p>
                <p>
                    <button class="btncontact" onclick="myFunction()">SEND</button>
                    <script>
                        function myFunction() {
                            alert("Thanks For Your Suggestion!");
                        }
                    </script>
                </p>
            </form>
        </div>
        <div class="div2">
            <p>
                <span>Address</span> <br /> <br />
                69/96 Trần Duy Hưng, Hồ Chí Minh <br />
                69/96 Bùi Viện, Hồ Chí Minh <br />
                69/96 BlueSky, Hồ Chí Minh <br />

            </p>
        </div>
        <div id="div3">

        </div>
    </div>

<?php 
$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/inc/footer.php';
?>