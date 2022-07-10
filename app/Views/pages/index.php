<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
        <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="single-slide-item slide1">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h2>Kecap ABC</h2>
                                        <p>
                                        Kecap Bango atau Bango adalah merek kecap manis dan bumbu yang diproduksi oleh PT Anugrah Mutu Bersama dan PT Sekar Laut untuk PT Unilever Indonesia Tbk. Kecap Bango sering membuat acara Festival Jajan Bango untuk memperkenalkan kuliner asli Indonesia</div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="assets/images/slider/slider1.jpg" alt="slider image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="single-slide-item slide2">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h2>Saus Belibis</h2>
                                        <p>
                                        Saus pedas, dikenal juga sebagai saus cabai atau saus lada merujuk pada berbagai bumbu saus yang memiliki efek pedas yang terbuat dari cabai dan bahan lainnya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="assets/images/slider/slider2.jpg" alt="slider image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>