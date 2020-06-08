<?php

include_once __DIR__ . '/Sede.php';

class Dipendente extends Sede {

    protected $dipendenteId;
    protected $dipendenteNome; 
    protected $dipendenteCognome;
    protected $dipendenteEta;
    protected $dipendenteReparto;
    protected $dipendentePostazione;    
    
    public function __construct($_nomeSede, $_dipendenteId, $_dipendenteNome, $_dipendenteCognome, $_dipendenteEta, $_dipendenteReparto, $_dipendentePostazione) {
        
        if ( !is_string($_nomeSede) ) {
            throw new Exception('Il Nome dell azienda non è corretto');
        }

        parent::__construct($_nomeSede);
        
        if ( !is_int($_dipendenteId) ) {
            throw new Exception("L' ID del dipendente non è valido");
        }

        if ( !is_string($_dipendenteNome) ) {
            throw new Exception('Il Nome del dipendente non è corretto');
        }
        
        if ( !is_string($_dipendenteCognome) ) {
            throw new Exception('Il Cognome dell dipendente non è corretto');
        }

        if ( !is_int($_dipendenteEta) ) {
            throw new Exception("L' età del dipendente non è valida");
        }

        if ( !is_string($_dipendenteReparto) ) {
            throw new Exception('Il Nome dell reparto non è corretto');
        }

        if ( !is_string($_dipendentePostazione) ) {
            throw new Exception('Il Nome della postazione non è corretta');
        }

        $this->dipendenteId = $_dipendenteId;
        $this->dipendenteNome = $_dipendenteNome;
        $this->dipendenteCognome = $_dipendenteCognome;
        $this->dipendenteEta = $_dipendenteEta;
        $this->dipendenteReparto = $_dipendenteReparto;
        $this->dipendentePostazione = $_dipendentePostazione;

    }

    public function print($element) {
        return $this->$element;
    }

}


try {
    $dipendente = new Dipendente('INBS', rand(100, 200), 'C' , 'Lentisco', 20, 'Salumificio', 'taglio');

    echo "Sede dipendente : {$dipendente->print('nomeSede')} <br>";
    echo "ID dipendente : {$dipendente->print('dipendenteId')} <br>";
    echo "Nome dipendente : {$dipendente->print('dipendenteNome')} <br>";
    echo "Cognome dipendente : {$dipendente->print('dipendenteCognome')} <br>";
    echo "Età dipendente : {$dipendente->print('dipendenteEta')} <br>";
    echo "Reparto dipendente : {$dipendente->print('dipendenteReparto')} <br>";
    echo "Postazione dipendente : {$dipendente->print('dipendentePostazione')} <br>";

} catch (Exception $error) {
    echo "Attenzione: {$error->getMessage()}";
}