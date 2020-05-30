<!DOCTYPE html>
<html>

<head>
    <title>SignUp Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/menu.css" />
    <script language="javascript" type="text/javascript" src="/twApp/public/js/pass.js"></script>
    <link rel="stylesheet" type="text/css" href="/twApp/public/css/auth.css">
</head>

<body>
    <header>
        <div class="barmenu">
            <a href="/twApp">
                <img class="logo" src="/twApp/public/images/s.png" alt="Sigla" style="height:3em">
            </a>
            <div class="sign">

                <a href="register"> <button class="log" type="button">
                        Sign up
                    </button> </a>
                <a href="login"><button class="log" type="button">
                        Log in
                    </button> </a>
            </div>

        </div>
    </header>


    <div class="image-div">
        <div class="center">
            <b>
                <h2>Sign up! It's free :)</h2>
            </b>
            <form class="form" action="" method="POST" id="add_student_form" target="_blank">
                <p>
                    <label for="name"><B>Nume de utilizator:</B></label>
                    <br><input type="text" id="username" name="Nume" placeholder="Numele de utilizator...">
                </p>
                <p>
                    <label for="email"><B>Adresa de e-mail:</B></label>
                    <br><input type="text" id="email" name="E-mail" placeholder="Adresa de e-mail...">
                </p>
                <p>
                    <label for="pass"><b>Parola:</b></label>
                    <br><input type="password" id="pass" name="Parola" placeholder="Parola..."><input type="checkbox" onclick="myFunction()">Show Password
                </p>
                <p>
                    <label for="Judet"><b>Judet:</b></label>
                    <br><select id="Judet" name="Judet">
                        <option value="alba">Alba</option>
                        <option value="arges">Arges</option>
                        <option value="bacau">Bacau</option>
                        <option value="bihor">Bihor</option>
                        <option value="bistrita-nasaud">Bistrita-Nasaud</option>
                        <option value="botosani">Botosani</option>
                        <option value="brasov">Brasov</option>
                        <option value="braila">Brăila</option>
                        <option value="bucuresti">Bucuresti</option>
                        <option value="buzau">Buzau</option>
                        <option value="caras-severin">Caras-Severin</option>
                        <option value="calarasi">Calarasi</option>
                        <option value="cluj">Cluj</option>
                        <option value="constanta">Constanta</option>
                        <option value="Covasna">Covasna</option>
                        <option value="dambovita">Dambovita</option>
                        <option value="dolj">Dolj</option>
                        <option value="galati">Galati</option>
                        <option value="giurgiu">Giurgiu</option>
                        <option value="gorj">Gorj</option>
                        <option value="harghita">Harghita</option>
                        <option value="hunedoara">Hunedoara</option>
                        <option value="ialomita">Ialomita</option>
                        <option value="iasi">Iasi</option>
                        <option value="ilfov">Ilfov</option>
                        <option value="maramures">Maramures</option>
                        <option value="mehedinti">Mehedinti</option>
                        <option value="mures">Mures</option>
                        <option value="neamt">Neamt</option>
                        <option value="olt">Olt</option>
                        <option value="prahova">Prahova</option>
                        <option value="satu mare">Satu Mare</option>
                        <option value="salaj">Salaj</option>
                        <option value="sibiu">Sibiu</option>
                        <option value="suceava">Suceava</option>
                        <option value="teleorman">Teleorman</option>
                        <option value="timis">Timis</option>
                        <option value="tulcea">Tulcea</option>
                        <option value="vaslui">Vaslui</option>
                        <option value="valcea">Valcea</option>
                        <option value="vrancea">Vrancea</option>

                    </select>
                </p>
                <p>
                    <section></section>
                    <input type="submit" name="submit" value="Sign in" formtarget="_self">
                    <br><p>Ai deja cont? <a href="login" class="send-to"><b>log in</b></a>!</p>
                <!--</p>-->
            </form>
        </div>
    </div>
</body>

</html>