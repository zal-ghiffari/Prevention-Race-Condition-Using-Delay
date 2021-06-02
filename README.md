# Prevention Race Condition Using Delay

Pada teknik ini, percobaan penanganan dilakukan dengan menambahkan delay pada file php, sehingga pada setiap request transaksi terdapat delay yang membuat transaksi tidak terjadi bersamaan. Yang artinya race condition dapat ditangani. Pada percobaan ini didapatkan hasil, yaitu race condition tidak terjadi dengan nilai untuk amount bernilai seharusnya yaitu 760000. 
## Credit
Fix vuln by zal - RPLK
[![Telegram](https://img.shields.io/badge/chat-Telegram-blue.svg)](https://t.me/better_enola)

Untuk memenuhi UTS Secure Programming
