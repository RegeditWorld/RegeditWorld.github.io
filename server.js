const express = require("express");
const path = require("path");

const app = express();
const port = 3000; // Sunucunun çalışacağı port

// Statik dosyaları sunmak için
app.use(express.static(path.join(__dirname, "public")));

// Anasayfa için HTML dosyasını serve et
app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, "public", "index.html"));
});

// Sunucuyu başlat
app.listen(port, () => {
  console.log(`Sunucu http://localhost:${port} adresinde çalışıyor`);
});
