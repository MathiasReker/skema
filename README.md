# Skema CLI

[![CLI](https://github.com/MathiasReker/skema-cli/blob/main/skema.png)](https://github.com/MathiasReker/skema-cli/blob/main/skema.png "CLI")

## Requirements
- Windows 10
- PHP 7+
- Git Bash

## Installation
- Følg videoen: [![Video](https://github.com/MathiasReker/skema-cli/blob/main/skema-cli.webm)](https://github.com/MathiasReker/skema-cli/blob/main/skema-cli.webm "Video")

``` bash
$ cd c:
$ git clone https://github.com/MathiasReker/skema-cli
```

1) Gå til System -> Avancerede systemindstillinger -> Miljøvariabler -> System variabler.
2) Klik på Path -> Rediger.
3) Tilføj ny: `C:\skema-cli`
4) Du kan nu kalde dit skema med kommandoen `skema` hvor som helst fra din computer. Se flere funktioner under dokumentationen. Du skal bruge Git Bash i stedet for CMD.

Skemaet ligger lokalt, her: `C:\skema-cli\skema-src\stud.kea.dk.ics`
Hvis du vi opdatere dit skema, skal du overskrive denne fil. Du kan downloade dit skema her: [https://publish.kea.dk/#/app/my-timetable](https://publish.kea.dk/#/app/my-timetable)

[![Skema](https://github.com/MathiasReker/skema-cli/blob/main/kean-publisher.png)](https://github.com/MathiasReker/skema-cli/blob/main/kean-publisher.png "Skema")

## Dokumentation
Vis dagens skema:
``` bash
$ skema
```

Vis skemaet n dage frem:
``` bash
$ skema -d n
```
