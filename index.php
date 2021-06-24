<!DOCTYPE html>

<html lang="hu,en">
    <head>
        <meta charset="UTF-8">
        <meta name="A weboldalt Ménesi Csaba készítette. Célom hogy egyfajta referenciát mutasson szakmában eltöltött évek hiányában mivel még csak tanulok." content="önéletrajz">
        <meta name="Ménesi, Csaba, cv, önéletrajz, referencia" content="HTML, CSS, JavaScript, PHP, MySQL">
        <meta name="Ménesi Csaba" content="Ménesi Csaba">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="desing.css" rel="stylesheet" type="text/css"/>
        <script src="JS_tartalom.js" type="text/javascript"></script>
        <link href="JS_Style.css" rel="stylesheet" type="text/css"/>
        <title>Ménesi Csaba</title>
    </head>
    <body class="lightM">
        <main class="lightM">
            <header>
                <img id="signo" src = "svg/signo.svg" alt="signo SVG"/>
                <nav>
                    <div id="settings">
                        <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" id="magyar"><img src="kepek/icon/flag-button-round-250_100x100.png" alt="magyarIcon"/></a>
                        <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" id="angol"><img src="kepek/icon/190-1908917_uk-flag-png-transparent-uk-flag-icon-png_100x100.png" alt="angolIcon"/></a>
                        <div class="onoffswitch">
                            <input type="checkbox" onclick="DarkModeSwitch()" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" tabindex="0">
                            <label class="onoffswitch-label" for="myonoffswitch">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>

                    </div>

                    <ul>
                        <li><a href="#main-card">Rólam</a></li>
                        <li><a href="#eredmenyek">Eredményeim</a></li>
                        <li><a href="https://www.w3schools.com" target="_blank">Hobbik</a></li>
                        <li><a href="https://www.w3schools.com" target="_blank">Referenciák</a></li>
                        <li><a href="#footer-social">Elérhetőségek</a></li>
                    </ul>
                </nav>

            </header>

            <div id="main-card">
                <div id="kep-card"><img src="kepek/content/profilKep.png" alt=""/></div>
                <div id="cim-card"><h1>A nevem Csaba</h1><h2>és üdvözöllek a weboldalamon.</h2></div>
                <div id="social-card">
                    <a href="mailto:menesi777@gmail.com" target="_blank"><img src="kepek/icon/gmail-30-722694.png" alt="menesi777@gmail.com"/></a>
                    <a href="https://www.facebook.com/csaba.menesi.1/" target="_blank"><img src="kepek/icon/Facebook_icon_192.png" alt="facebook_icon"/></a>
                    <a href="https://github.com/Csaba19999" target="_blank"><img src="kepek/icon/github-163-761603.png" alt="GitHub_icon"/></a>
                    <a href="https://www.instagram.com/me.csaba/" target="_blank"><img src="kepek/icon/letöltés.png" alt="Instagram_icon"/></a>
                </div> 
            </div>

            <aside>
                <h1 id="foCim">A saját utamon</h1>
                <p>Why do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                    Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                <p>Why do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                    Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
            </aside>

            <div id="eredmenyek">
                <h1 id="foCim">Eddigi eredményeim</h1>
                <p>Why do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                    Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
            </div>
            <article>
                <table>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th> 
                        <th>Age</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>80</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th> 
                        <th>Age</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>80</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th> 
                        <th>Age</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>80</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th> 
                        <th>Age</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>80</td>
                    </tr>
                </table>

            </article>

            <footer>
                <address>
                    <ul>
                        <li><h3 id="footer-cim">Elérhetőségek</h3></li>
                        <li>
                            <ul>
                                <li><p>Telefonszám: <a href="tel:+36501080482"> +36501080482</a></p></li>
                                <li><p>E-mail: <a href="mailto:menesi777@gmail.com"> menesi777@gmail.com</a></p></li>
                                <li><p>GitHub: <a href="https://github.com/Csaba19999" target="_blank"> Csaba19999</a></p></li>
                            </ul>
                        </li>
                    </ul>
                    <p>Kérdés vagy ajánlat esetén ezeken a címeken érhetnek el.</p>
                </address>

                <div id="qr-code">
                    <img src="kepek/icon/qrcode.png" alt=""/>
                    <h3 id="footer-cim">Jövőbeli projectek.</h3>
                </div>

                <div id="footer-social">
                    <img src="kepek/icon/gmail-30-722694.png" alt="gmail_icon" target="_blank"/>
                    <img src="kepek/icon/Facebook_icon_192.png" alt="facebook_icon" target="_blank"/>
                    <img src="kepek/icon/github-163-761603.png" alt="gitHub_icon" target="_blank"/>
                    <img src="kepek/icon/letöltés.png" alt="gmail_icon" target="_blank"/>
                    <p>@Minden jog fenntartva</p>
                </div>

            </footer>
        </main>
    </body>
</html>
