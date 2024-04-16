const form = document.getElementById('form');
const email = document.getElementById('email');
const namadepan = document.getElementById('namadepan');
const namabelakang = document.getElementById('namabelakang');
const alamat = document.getElementById('alamat');
const opsional = document.getElementById('opsional');
const provinsi = document.getElementById('provinsi');
const kota = document.getElementById('kota');
const kodepos = document.getElementById('kodepos');
const notelp = document.getElementById('notelp');

form.addEventListener('tombol-lanjutkan', e => {
  e.preventDefault();

  validateInputs();
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innertext = message;
  inputControl.classList.add('error');
  inputControl.classList.removw('success')
};

const setSuccess = element => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innertext = message;
  inputControl.classList.add('success');
  inputControl.classList.removw('error')
};

const isValidEmail = email => {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
  const emailValue = email.value.trim();
  const namadepanValue = namadepan.value.trim();
  const namabelakangValue = namabelakang.value.trim();
  const alamatValue = alamat.value.trim();
  const opsionalValue = opsional.value.trim();
  const provinsiValue = provinsi.value.trim();
  const kotaValue = kota.value.trim();
  const kodeposValue = kodepos.value.trim();
  const notelpValue = notelp.value.trim();

  if(email === '') {
    setError(email, 'Mohon masukkan email yang valid');
  } else if (!isValidEmail(emailValue)) {
    setError(email, 'Mohon berikan email yang valid');
} else {
    setSuccess(email);
}

  if(namadepanValue === '') {
    setError(namadepan, 'Mohon masukkan nama depan yang valid');
  } else {
    setSuccess(namadepan);
  }

  if(namabelakangValue === '') {
    setError(namabelakang, 'Mohon masukkan nama belakang yang valid');
  } else {
    setSuccess(namabelakang);
  }

  if(alamatValue === '') {
    setError(alamat, 'Mohon masukkan alamat yang valid');
  } else {
    setSuccess(alamat);
  }

  if(opsionalValue === '') {
    setError(opsional, 'Mohon masukkan opsional yang valid');
  } else {
    setSuccess(opsional);
  }

  if(provinsiValue === '') {
    setError(provinsi, 'Mohon masukkan provinsi yang valid');
  } else {
    setSuccess(provinsi);
  }

  if(kotaValue === '') {
    setError(kota, 'Mohon masukkan kota yang valid');
  } else {
    setSuccess(kota);
  }

  if(kodeposValue === '') {
    setError(kodepos, 'Mohon masukkan kodepos yang valid');
  } else {
    setSuccess(kodepos);
  }

  if(notelpValue === '') {
    setError(notelp, 'Mohon masukkan nomor telephone yang valid');
  } else {
    setSuccess(notelp);
  }
};