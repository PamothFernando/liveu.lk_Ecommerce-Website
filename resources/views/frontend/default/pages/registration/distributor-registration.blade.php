<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="icon" type="image/png" href="https://liveu.lk/public/frontend/default/assets/img/shapes/leaf.svg?v=v4.4.1">
<title>Live U Distributor Registration</title>
<style>
  body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
    background: url('https://liveu.lk/public/uploads/media/VzMzr4slGRgI3dzvfNqfWD93fP7ggdEalsDQyn7y.jpg') no-repeat center center fixed;
    background-size: cover;
    padding: 15px;
  }
  .container {
    max-width: 900px;
    width: 100%;
    display: flex;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 25px rgba(0,0,0,0.25);
    background: linear-gradient(
      to bottom right,
      rgba(255,255,255,0.95),
      rgba(255,255,255,0.85) 40%,
      rgba(255,255,255,0.75) 60%,
      rgba(255,255,255,0.9)
    );
    flex-wrap: wrap;
  }
  .left-section, .right-section { padding: 30px; box-sizing: border-box; }
  .left-section {
    flex: 1 1 300px;
    text-align: center;
    border-right: 1px solid rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 30px;
  }
  .logo-box { display: flex; flex-direction: column; align-items: center; }
  .logo-box img {
    max-width: 180px; height: auto; margin-bottom: 8px;
    object-fit: contain; transition: transform 0.3s ease;
  }
  .logo-box img:hover { transform: scale(1.05); }
  .logo-box a { color: #333; font-size: 14px; text-decoration: none; transition: color 0.3s ease; }
  .logo-box a:hover { color: #4e73df; }
  .right-section { flex: 2 1 400px; background: transparent; }
  .right-section h2 { text-align: center; margin-bottom: 20px; font-size: 22px; color: #222; }
  .status { text-align: center; font-size: 14px; margin-bottom: 15px; font-weight: bold; }
  .status.success { color: green; }
  .status.error { color: red; }
  input {
    width: 100%; padding: 12px; margin: 8px 0; border: 1px solid #ddd;
    border-radius: 25px; font-size: 14px; background: rgba(255, 255, 255, 0.95);
    box-sizing: border-box;
  }
  .register-btn {
    width: 100%; padding: 12px; border: none; background: #4e73df;
    color: white; border-radius: 25px; font-size: 16px;
    cursor: pointer; margin-top: 10px; transition: background 0.3s ease;
  }
  .register-btn:hover { background: #3b5bb3; }
  .footer { text-align: center; font-size: 12px; color: #444; margin-top: 15px; }
  .footer a { color: green; text-decoration: none; font-weight: bold; }
</style>
<!-- ✅ Google reCAPTCHA v3 script -->
<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHAV3_SITEKEY') }}"></script>
</head>
<body>

<div class="container">
  <!-- Left section -->
  <div class="left-section">
    <div class="logo-box">
      <img src="https://liveu.lk/public/uploads/media/outrotJu3SbIYg1jhnLzoFqJxlVpVqCfD3eEoxMy.png" alt="LiveU Logo" />
    </div>
    <div class="logo-box">
      <img src="https://zktecosrilanka.lk/public/uploads/media/apf9Oq5U6faFD4BweWhJ5UqACeMq8LR6hb3hM3vA.png" alt="ZKTeco Sri Lanka Logo" />
      <a href="https://zktecosrilanka.lk/">www.zktecosrilanka.lk</a>
    </div>
    <div class="logo-box">
      <img src="https://zkdigimax.lk/storage/logo/logo-1.png" alt="ZK Digimax Logo" />
      <a href="https://zkdigimax.lk/">www.zkdigimax.lk</a>
    </div>
  </div>

  <!-- Right section -->
  <div class="right-section">
    <h2>Welcome Live U Distributors</h2>

    {{-- ✅ Status Messages --}}
    @if(session('success'))
        <div class="status success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="status error">{{ session('error') }}</div>
    @endif

    @if($errors->any())
        <div class="status error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>❌ {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Distributor Registration Form --}}
    <form id="distributorForm" method="POST" action="{{ route('distributor.store') }}">
        @csrf

        <!-- ✅ Honeypot -->
        <input type="text" name="distributor_extra" style="display:none">

        <input type="text" name="distributorfullname" placeholder="First & Last Name Ex: Shenali Senevirathene" value="{{ old('distributorfullname') }}" required />
        <input type="text" name="distributorphone" placeholder="Phone Number Ex: 0710333356" value="{{ old('distributorphone') }}" required />
        <input type="text" name="distributorcompany" placeholder="Company Name" value="{{ old('distributorcompany') }}" required />
        <input type="text" name="distributoraddress" placeholder="Company Address" value="{{ old('distributoraddress') }}" required />
        <input type="email" name="distributoremail" placeholder="Email Address" value="{{ old('distributoremail') }}" required />

        <!-- ✅ Hidden input for reCAPTCHA token -->
        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

        <button type="submit" class="register-btn">Send Message</button>
    </form>

    <div class="footer">
      Live U (PVT) LTD Distributor Registration | Support Center: 0117 780 000<br>
      <a href="https://wa.me/94710333356">WhatsApp Click here</a>
    </div>
  </div>
</div>

<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('{{ env('RECAPTCHAV3_SITEKEY') }}', {action: 'submit'}).then(function(token) {
      document.getElementById('g-recaptcha-response').value = token;
    });
  });
</script>

</body>
</html>
