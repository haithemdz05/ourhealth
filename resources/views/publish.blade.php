<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publish Update</title>
    <link rel="shortcut icon" href="/img/icon_site.png">
    <link rel="stylesheet" href="/css/dashbored.css">
    <link rel="stylesheet" href="/css/publish.css">
</head>
<style>
    :root{
  --bg:#f7fbff;
  --card:#ffffff;
  --accent:#2b87ff;
  --muted:#6b7280;
  --radius:12px;
  --shadow: 0 12px 30px rgba(16,24,40,0.08);
  font-family: "Winky Sans", system-ui, -apple-system, "Segoe UI", Roboto, Arial;
}
*{box-sizing:border-box}
body{background:var(--bg);margin:0;color:#0f172a;-webkit-font-smoothing:antialiased;}

.publish-wrap{width:76%;margin:28px auto;padding:20px}
.publish-header{margin-bottom:18px;padding:18px;border-radius:12px;background:linear-gradient(90deg, rgba(43,135,255,0.12), rgba(0,195,255,0.06));box-shadow:var(--shadow)}
.publish-header h1{margin:0;font-size:1.35rem;color:var(--accent)}
.publish-header .subtitle{margin:6px 0 0;color:var(--muted)}

.publish-form{
    width: 100%;
    background:var(--card);
    padding:20px;
    border-radius:12px;
    box-shadow:var(--shadow);
    border:1px solid rgba(15,23,42,0.04)}
.publish-form .row{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}
.publish-form label{display:flex;flex-direction:column;gap:8px;font-size:.95rem;color:#111827}
.publish-form label span{font-weight:600;color:#264372}
.publish-form input[type="text"],
.publish-form input[type="date"],
.publish-form textarea{
  padding:10px 12px;border-radius:8px;border:1px solid rgba(15,23,42,0.06);background:#fff;outline:none;transition:box-shadow .15s;
}
.publish-form input:focus, .publish-form textarea:focus {box-shadow:0 6px 18px rgba(43,135,255,0.08);border-color:var(--accent)}

.publish-form .full{grid-column:1 / -1}
.publish-form textarea{min-height:160px;resize:vertical}

.file-field .file-control{display:flex;gap:8px;align-items:center}
.file-field input[type="file"]{padding:6px}
.btn-secondary{background:#f3f4f6;border:1px solid rgba(15,23,42,0.04);padding:8px 12px;border-radius:8px;cursor:pointer}
.preview{margin-top:10px;display:flex;align-items:center;justify-content:center;border-radius:8px;overflow:hidden;background:linear-gradient(180deg,#fbfdff,#fff);width:160px;height:110px;border:1px solid rgba(15,23,42,0.03)}
.preview img{width:100%;height:100%;object-fit:cover}

/* actions */
.actions{display:flex;gap:12px;justify-content:flex-end;margin-top:18px}
.btn-primary{background:linear-gradient(90deg,var(--accent),#00c3ff);color:white;padding:10px 20px;border-radius:10px;border:0;font-weight:700;cursor:pointer;box-shadow:0 10px 30px rgba(43,135,255,0.18)}
.btn-link{text-decoration:none;padding:10px 18px;border-radius:10px;background:#fff;border:1px solid rgba(15,23,42,0.04);color:var(--muted);display:inline-flex;align-items:center}

/* responsive */
@media (max-width:900px){
  .publish-form .row{grid-template-columns:1fr}
  .preview{width:100%;height:180px}
  .actions{flex-direction:column;align-items:stretch}
}
label #chioim {
    border-radius: 8px;
    color: white;
    background-color: #397bff;
    border: 1px solid rgba(15, 23, 42, 0.04);
    padding: 8px 12px;
    cursor: pointer;
    display: inline-block;
}
</style>
<body>
    @include('layout.section_admin')
    <section class="container publish-wrap">
        <header class="publish-header">
            <h1>New Medical Publication</h1>
            <p class="subtitle">Share the latest health information with patients — concise, clear and professional.</p>
        </header>

        <form class="publish-form" action="{{route('save_publish')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <label>
                    <span>Date</span>
                    <input type="date" name="published_at" required>
                </label>

                <label>
                    <span>Subject</span>
                    <input type="text" name="title" placeholder="Publication subject" required>
                </label>

                <label>
                    <span>Author</span>
                    <input type="text" name="author" placeholder="Author name" required>
                </label>

                <label class="file-field">
                    <span>Cover image</span>
                    <div class="file-control">
                        <label id="chioim" for="imageInput"> chiose image</label>
                        <input type="file" name="image" accept="image/*" id="imageInput" hidden>
                        <button type="button" class="btn-secondary" id="clearImage">Clear</button>
                    </div>
                    <div class="preview" id="imgPreview"><img src="/img/publish-default.jpg" alt="preview"></div>
                </label>
            </div>

            <label class="full">
                <span>Summary</span>
                <input type="text" name="summary" placeholder="Short summary (one line)" maxlength="200">
            </label>

            <label class="full">
                <span>Full text</span>
                <textarea name="body" rows="8" placeholder="Write the full content here..." required></textarea>
            </label>

            <div class="actions">
                <button type="submit" class="btn-primary">Publish</button>
                <a href="" class="btn-link">Cancel</a>
            </div>
        </form>
    </section>

<script>
document.getElementById('imageInput')?.addEventListener('change', function(e){
  const preview = document.getElementById('imgPreview').querySelector('img');
  const file = e.target.files[0];
  if(!file) return;
  const url = URL.createObjectURL(file);
  preview.src = url;
});
document.getElementById('clearImage')?.addEventListener('click', function(){
  const input = document.getElementById('imageInput');
  const preview = document.getElementById('imgPreview').querySelector('img');
  input.value = '';
  preview.src = '/img/publish-default.jpg';
});
    document.getElementById("toggleButton").addEventListener("click", function () {
    const list = document.getElementById("hiddenList");
    const bottomElement = document.getElementById("port4");
    if (list.classList.contains("hidden")) {
        list.classList.remove("hidden");
        bottomElement.style.marginTop = "150px";
    } else {
        list.classList.add("hidden");
        bottomElement.style.marginTop = "20px"; 
    }
});
</script>
</body>
</html>