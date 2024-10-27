<?php include "header.php"; ?>

<main>

    <nav class="mybreadcrumb w-100  d-none d-md-block" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house fa-lg"></i></a></li>
            <li class="breadcrumb-item active fw-bold" aria-current="page">نتيجة البحث عن:</li>
        </ol>
    </nav>


    <div id="result-section" class="my-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <p class="result fw-bold">
                        نتيجة البحث
                    </p>
                    <hr>
                    <p>لا توجد نتائج مطابقة لبحثك</p>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
include "footer.php"; ?>