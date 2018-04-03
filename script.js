
    function sks() {

        var x;

        var sks = prompt("Silahkan input total sks anda", "Total SKS");

        if (sks != null) {

            x = "Total sks anda : " + sks;

            document.getElementById("x").innerHTML = x;

            if(sks<144)
            {
            	y = "<p style='background-color:red;'>Maaf , anda kami drop out.<p>";
            	document.getElementById("y").innerHTML = y;
            }
            else
            {
            	y = "Anda dalam zona aman";
            	document.getElementById("y").innerHTML = y;
            }

        }

    }

sks()