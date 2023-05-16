<style>
.form-ppdb {
  margin-top: 100px;
}



.first-form input {
	width: 80%;
	padding: 10px;
	border-radius: 10px;
  border: 2px rgb(113, 113, 231) solid;
  outline: none;
  margin-top: 30px;
}

.second-form textarea {
	border: 2px rgb(113, 113, 231) solid;
	padding: 10px;
	border-radius: 10px;
  outline: none;
}

.jenis-kelamin,
.agama,
.know-from,
.jurusan {
	padding: 20px;
	border: 2px rgb(113, 113, 231) solid;
	border-radius: 10px;
	margin: 20px 0;
}

.jenis-kelamin {
	height: 130px;
}

.jenis-kelamin label,
.jenis-kelamin p {
	margin-left: 20px;
}

.agama select,
.know-from select {
	width: 200px;
	padding: 5px;
	border: 2px rgb(113, 113, 231) solid;
	border-radius: 10px;
	margin: 20px 0;
}

.agama input,
.know-from input {
	width: 200px;
	padding: 5px;
	border: 2px rgb(113, 113, 231) solid;
	border-radius: 10px;
	margin: 20px 0;
	outline: none;
}

.know-from {
  margin-top: -60px;
}

.checkbox {
	width: 15px !important;
}


.form-ppdb .btn-form-submit {
	padding: 10px 0;
	background-color: rgb(113, 113, 231);
	border: none;
	border-radius: 10px;
  color: white;
  margin: auto;
  width: 90%;
}





</style>

  <!-- Bar info -->
      <form class="form-ppdb container" action="<?= base_url('Ppdb/tambah_data')?>" method="post">
      <div class="d-flex justify-content-center">
      <div class="first-form d-flex flex-column w-50 align-items-center"> 
        <input type="text"name="Nama" placeholder="Nama Siswa"/>
        <input type="number" name="nisn" id="nisn" placeholder="NISN"/>
        <input type="text" name="namaOrtu" placeholder="Nama Orang Tua"/>
        <input type="text" name="asek" placeholder="Asal Sekolah"/>
        <input type="number" name="no_hp" placeholder="Nomer Handphone / WA"/>
      </div>
       <div class="second-form w-50 d-flex flex-column">
        <label for="alamat"> Alamat</label>
        <textarea class="100" id="alaman" name="alamat" placeholder="Isi alamat lengkap anda di sini ..."></textarea>

        <div class="d-flex justify-content-between">
          <div class="jenis-kelamin w-50 me-3">
             <p>Jenis Kelamin</p>
             <label for="pria">Pria</label>
            <input id="pria" type="radio" name="JK" value="pria"/>
            <label for="wanita">Wanita</label>
            <input id="wanita" type="radio" name="JK" value="wanita"/> 
          </div>
        <div class="agama w-50">
            <p>Agama</p>
        <select id="agama" name="agama" style="display:block" >
        <option disabled selected>--Pilih--</option>
          <option value="islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Konghucu">Konghucu</option>
        </select>
        <input type="text" name="lainnya_a" style="display:none" placeholder="isi agamamu"  id="lainnya_a"/>
        <div class="d-flex">
          <p>Lainnya</p>
          <input type="checkbox" id="LainnyaA" value="lainnya" name="LainnyaA" class="ms-2 checkbox" style="margin-top: -1px">
        </div>
          </div>
        </div>
        

        <div class="d-flex justify-content-between">
          <div class="know-from w-50 me-3">
            <p>Darimana Kamu Tahu SMK Yadika Soreang?</p>
            <select id="sumber" name="sumber" style="display:block" >
              <option disabled selected>--Pilih--</option>
              <option value="Teman">Teman</option>
              <option value="Keluarga">Keluarga</option>
              <option value="Media Sosial">Media Sosial</option>
            </select>
            <input type="text" name="lainnya_s" style="display:none"placeholder ="isi sumber informasi" id="lainnya_s"/>
            <div class="d-flex">
              <p>Lainnya</p>
              <input type="checkbox" id="LainnyaS" value="lainnya" name="LainnyaS" style="margin-top: -3px" class="checkbox ms-2"/> 
            </div>
          </div>

          <div class="jurusan w-50" style="margin-top: -10px">
            <p>Pilihan Jurusan</p>
            <div>
            <input type="radio" name="jurusan" value="RPL" id="rpl"/> 
            <label for="rpl">Rekayasa Perangkat Lunak</label>
            </div>
            <div>
              <input type="radio" name="jurusan" value="AK" id="ak"/> 
            <label for="ak">Akuntansi</label>
            </div>
            
            <input type="radio" name="jurusan" value="AP" id="ap"/> 
            <label for="ap">Perhotelan</label>
          </div>
        </div>
    
        </div>
      </div>
      <div class="w-100 d-flex justify-content-center">
        <input class="btn btn-form-submit mx-auto" type="submit" value="submit">
      </div>
    
    </form>

  <script>
       const checkA = document.getElementById('LainnyaA');
       checkA.addEventListener('change', function () {
            if (this.checked) {
                return muncul_a()
            } else {
                return ilang_a()
            }
        });
       const checkS = document.getElementById('LainnyaS');
       checkS.addEventListener('change', function () {
            if (this.checked) {
                return muncul_s()
            } else {
                return ilang_s()
            }
        });
    function ilang_a(){
      document.getElementById('lainnya_a').style.display = 'none';
      document.getElementById('agama').setAttribute('name','agama');
      document.getElementById('agama').style.display = 'block';
    }
    function muncul_a(){
      document.getElementById('lainnya_a').style.display = 'block';
      document.getElementById('agama').removeAttribute('name');
      document.getElementById('agama').style.display = 'none';
    }
    function ilang_s(){
      document.getElementById('lainnya_s').style.display = 'none';
      document.getElementById('sumber').setAttribute('name','sumber');
      document.getElementById('sumber').style.display = 'block';
    }
    function muncul_s(){
      document.getElementById('lainnya_s').style.display = 'block';
      document.getElementById('sumber').removeAttribute('name');
      document.getElementById('sumber').style.display = 'none';
    }
  </script>
  <!-- End -->
  