<?php include "header.php"; ?>

<main>

    <nav class="mybreadcrumb w-100  d-none d-md-block" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house fa-lg"></i></a></li>
            <li class="breadcrumb-item active fw-bold" aria-current="page">اتصل بنا</li>
        </ol>
    </nav>


    <section id="contactus-section" class="mt-4 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="content">
                        <h3 class="title text-white fw-bold mb-4">
                            اتصل بنا</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-7 col-lg-6">
                            <div id="zf_div_4pIIFYVj21tBsgY2wUEpVQBTN6ixOrq7w9937e5xhZ0"></div>
                            <script type="text/javascript">
                                (function() {
                                    try {
                                        var f = document.createElement("iframe");
                                        f.src = 'https://forms.zohopublic.eu/atiragruop/form/TCCContactPage1/formperma/4pIIFYVj21tBsgY2wUEpVQBTN6ixOrq7w9937e5xhZ0?zf_rszfm=1';
                                        f.style.border = "none";
                                        f.style.height = "520px";
                                        f.style.width = "100%";
                                        f.style.transition = "all 0.5s ease";
                                        f.setAttribute("aria-label", 'TCC\x20Contact\x20Page');

                                        var d = document.getElementById("zf_div_4pIIFYVj21tBsgY2wUEpVQBTN6ixOrq7w9937e5xhZ0");
                                        d.appendChild(f);
                                        window.addEventListener('message', function() {
                                            var evntData = event.data;
                                            if (evntData && evntData.constructor == String) {
                                                var zf_ifrm_data = evntData.split("|");
                                                if (zf_ifrm_data.length == 2) {
                                                    var zf_perma = zf_ifrm_data[0];
                                                    var zf_ifrm_ht_nw = (parseInt(zf_ifrm_data[1], 10) + 15) + "px";
                                                    var iframe = document.getElementById("zf_div_4pIIFYVj21tBsgY2wUEpVQBTN6ixOrq7w9937e5xhZ0").getElementsByTagName("iframe")[0];
                                                    if ((iframe.src).indexOf('formperma') > 0 && (iframe.src).indexOf(zf_perma) > 0) {
                                                        var prevIframeHeight = iframe.style.height;
                                                        if (prevIframeHeight != zf_ifrm_ht_nw) {
                                                            iframe.style.height = zf_ifrm_ht_nw;
                                                        }
                                                    }
                                                }
                                            }
                                        }, false);
                                    } catch (e) {}
                                })();
                            </script>
                        </div>
                        <div class="col-12 col-md-5 col-lg-6">
                            <div class="call-info mt-5 mt-md-0">
                                <h4 class="text-center">تواصل معنا </h4>
                                <div class="hr"></div>
                                <div class="d-flex flex-column align-items-center gap-2">
                                    <div class="d-flex justify-content-center gap-4 mb-3 mt-4">
                                        <i class="fa-solid fa-mobile-screen-button fa-2xl"></i>
                                        <i class="fa-brands fa-telegram fa-2xl"></i>
                                        <i class="fa-brands fa-whatsapp fa-2xl"></i>
                                    </div>
                                    <p dir="ltr">+905528825888</p>
                                </div>
                                <div class="text-center">
                                    <i class="fa-solid fa-envelope fa-2xl"></i>
                                    <p class="mt-2"> info@turkey-care.com</p>
                                </div>
                                <div class="text-center">
                                    <i class="fa-solid fa-location-dot fa-2xl"></i>
                                    <p class="mt-2"> İstanbul - Turkey</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include "footer.php"; ?>