
   <!-- <section class="no-margin">
        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=dhaka+ban&amp;sll=40.714353,-74.005973&amp;sspn=0.836898,1.815491&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=24.542126,90.293884&amp;spn=0.124922,0.411301&amp;z=8&amp;output=embed"></iframe>
    </section> -->

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Kontak</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="<?php echo base_url(). 'home';?>">Home</a> <span class="divider">/</span></li>
                        <li><a href="#">Pages</a> <span class="divider">/</span></li>
                        <li class="active">Kontak</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->   

    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Form Kontak</h4>
                <div class="status alert alert-success" style="display: block" align="center">Silahkan isi form kontak dibawah ini :</div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>Nama *</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Masukkan nama">
                        <label>Email / No. HP. *</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Email atau atau nomor handphone">
                        <label>Subjek</label>
                        <input type="text" class="input-block-level"  placeholder="Subjek (opsional)">
                    </div>
                    <div class="span7">
                        <label>Pesan</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8" placeholder="Masukkan pesan anda disini"></textarea>
                    </div>

                </div>
				<font color="green">Tanda (*) wajib diisi</font>
                <button type="submit" class="btn btn-primary btn-large pull-right">Kirim Pesan</button>
                <p> </p>

            </form>
        </div>

        <div class="span3">
            <h4>Alamat Kami</h4>
            <p>Datang ke alamat kami.</p>
            <p>
                <i class="icon-map-marker pull-left"></i> Jl. Raya Paningkaban - Dermaji K.M. 1<br>
                RT 04/05, Desa Paningkaban, Kec. Gumelar, Kab. Banyumas
            </p>
            <p>
                <i class="icon-envelope"></i> diwacom@outlook.co.id
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;085770701982
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.apaananegroup.com
            </p>
        </div>

    </div>

</section>

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>   

</body>
</html>
