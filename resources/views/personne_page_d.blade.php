<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Profile — Edit</title>
    <link rel="shortcut icon" href="/img/icon_site.png">
    <link rel="stylesheet" href="/css/doctor.css">
    <style>
      /* Page-specific styles */
      .profile-wrap{
        width: 100%;
        /* max-width:1100px; */
        margin:32px auto;
        padding:22px;
      }
      .profile-grid{
        width: 100%;
        display:flex;
        justify-content: space-between;
        gap:4px;
        align-items:start;
      }
      .card{
        background:#fff;
        border-radius:14px;
        padding:18px;
        box-shadow:0 12px 28px rgba(3,16,46,0.06);
        border:1px solid rgba(3,16,46,0.04);
        
      }
      .avatar-wrap{
        text-align:center;
        display:flex;
        flex-direction:column;
        gap:12px;
        align-items:center;
      }
      .avatar{
        width:160px;
        height:160px;
        border-radius:14px;
        object-fit:cover;
        border:6px solid rgba(43,135,255,0.06);
        background:linear-gradient(180deg,#fbfdff,#fff);
      }
      .upload-btn{
        display:inline-block;padding:8px 12px;border-radius:10px;background:#f3f6ff;color:#0b5ed7;border:1px solid rgba(11,94,215,0.08);cursor:pointer;font-weight:600;
      }
      form .form-row{display:flex;gap:14px}
      form .col{flex:1;min-width:0}
      label{display:block;font-weight:700;margin-bottom:8px;color:#0f172a;font-size:0.95rem}
      input[type="text"], input[type="email"], input[type="tel"], textarea{
        width:100%;padding:10px 12px;border-radius:10px;border:1px solid rgba(3,16,46,0.06);background:#fff;outline:none;font-size:0.95rem;
      }
      textarea{min-height:120px;resize:vertical}
      .actions{display:flex;gap:12px;justify-content:flex-end;margin-top:14px}
      .btn-save{background:linear-gradient(90deg,#0369a1,#0ea5e9);color:#fff;padding:10px 18px;border-radius:10px;border:0;font-weight:700;cursor:pointer}
      .btn-cancel{background:#fff;border:1px solid rgba(3,16,46,0.06);padding:10px 14px;border-radius:10px;color:#374151;cursor:pointer}
      .field-note{font-size:0.88rem;color:#6b7280;margin-top:6px}
      .error{color:#ef4444;font-size:0.9rem;margin-top:6px}
      @media (max-width:900px){
        .profile-grid{grid-template-columns:1fr; padding:8px}
        .avatar{width:140px;height:140px}
      }
    </style>
</head>
<body>
  <section class="profile-wrap">
    <div class="profile-grid">
      <aside class="card avatar-wrap" srtle="margin-right:12px;width:40%">
        <img id="avatarPreview" class="avatar" src="{{ isset($doctor) && $doctor->image_d ? asset('storage/'.$doctor->image_d) : asset('storage/patients/img_user.jpg') }}" alt="Doctor avatar">
        <label class="upload-btn">
          Choose image
          <input id="imageInput" type="file" name="image" accept="image/*" style="display:none">
        </label>
        <p class="field-note">Preferred: JPG/PNG, max 2MB. This image will be shown to patients.</p>
      </aside>

      <main class="card" style="width: 80%">
        <h2 style="margin:0 0 12px 0">Edit your profile</h2>
        <p class="field-note" style="margin-bottom:18px">Update your personal and professional information. Fields marked required must be filled.</p>

        <form id="doctorUpdateForm" action="{{ route('doctor.update', $doctor->id_doctor ?? 0) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="form-row">
            <div class="col">
              <label for="first_name_d">First name *</label>
              <input id="first_name_d" name="first_name_d" type="text" value="{{ old('first_name_d', $doctor->first_name_d ?? '') }}" required>
              @error('first_name_d') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="col">
              <label for="last_name_d">Last name *</label>
              <input id="last_name_d" name="last_name_d" type="text" value="{{ old('last_name_d', $doctor->last_name_d ?? '') }}" required>
              @error('last_name_d') <div class="error">{{ $message }}</div> @enderror
            </div>
          </div>

          <div class="form-row" style="margin-top:12px">
            <div class="col">
              <label for="email_d">Email *</label>
              <input id="email_d" name="email_d" type="email" value="{{ old('email_d', $doctor->email_d ?? '') }}" required>
              @error('email_d') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="col">
              <label for="phone_d">Phone</label>
              <input id="phone_d" name="phone_d" type="tel" value="{{ old('phone_d', $doctor->phone_d ?? '') }}">
              @error('phone_d') <div class="error">{{ $message }}</div> @enderror
            </div>
          </div>

          <div style="margin-top:12px">
            <label for="address_d">Address</label>
            <input id="address_d" name="address_d" type="text" value="{{ old('address_d', $doctor->address_d ?? '') }}">
            @error('address_d') <div class="error">{{ $message }}</div> @enderror
          </div>

          <div class="form-row" style="margin-top:12px">
            <div class="col">
              <label for="doctor_symbol">Doctor symbol / ID</label>
              <input id="doctor_symbol" name="doctor_symbol" type="text" value="{{ old('doctor_symbol', $doctor->doctor_symbol ?? '') }}">
              @error('doctor_symbol') <div class="error">{{ $message }}</div> @enderror
            </div>
            <div class="col">
              <label for="num_MD">Medical license #</label>
              <input id="num_MD" name="num_MD" type="text" value="{{ old('num_MD', $doctor->num_MD ?? '') }}">
              @error('num_MD') <div class="error">{{ $message }}</div> @enderror
            </div>
          </div>

          <div style="margin-top:12px">
            <label for="specialty">Specialty</label>
            <input id="specialty" name="specialty" type="text" value="{{ old('specialty', $doctor->specialty ?? '') }}">
            @error('specialty') <div class="error">{{ $message }}</div> @enderror
          </div>

          <div class="actions">
            <button type="submit" class="btn-save">Save changes</button>
            <a href="{{ url()->previous() }}" class="btn-cancel">Cancel</a>
          </div>
        </form>
      </main>
    </div>
  </section>

<script>
  // image preview + wire the hidden file input (keeps form input in DOM by adding file input when user chooses image)
  (function(){
    const avatar = document.getElementById('avatarPreview');
    const hiddenInput = document.getElementById('imageInput');
    const uploadBtn = document.querySelector('.upload-btn');
    // when upload btn clicked, open file picker
    uploadBtn.addEventListener('click', function(e){
      e.preventDefault();
      hiddenInput.click();
    });
    hiddenInput.addEventListener('change', function(e){
      const f = e.target.files && e.target.files[0];
      if(!f) return;
      const url = URL.createObjectURL(f);
      avatar.src = url;
    });
    // submit handler ensures file input is inside form (it is outside visually but is in DOM). Move into form on submit to ensure it is sent.
    const form = document.getElementById('doctorUpdateForm');
    form.addEventListener('submit', function(){
      if(hiddenInput && hiddenInput.files && hiddenInput.files.length){
        hiddenInput.name = 'image';
        // ensure hidden input is a child of form (if not already)
        if(!form.contains(hiddenInput)){
          form.appendChild(hiddenInput);
        }
      }
    });
  })();
</script>
</body>
</html>