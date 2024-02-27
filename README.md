# Kas ir API?
    - API ir sistēmas, kas ļauj diviem programmatūras komponentiem sazināties vienam ar otru
# Kā deklarēt mainīgo PHP valodā?
    - $mainīgais = vērtība
# Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
    - Laravel izmanto MVC arhitektūru, kas nodala datu bāzes loģiku, lietotāja saskarni un aplikācijas loģiku, atvieglojot lietotņu uzturēšanu un attīstību.
# Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
    - ORM  ir programmēšanas tehniku kopums, kas ļauj manipulēt ar datubāzes ierakstiem, izmantojot augsta līmeņa objektorientētu sintaksi, nevis tīru SQL kodu. To izmanto, lai atvieglotu datu bāzes operāciju izstrādi, nodrošinātu kodu skaidrību un samazinātu kļūdu risku, veicot datu manipulācijas.
# Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra
    - $users = User::where('rating', '>', 4)->get();