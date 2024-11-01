<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/pages/04.docenti/standard.md',
    'modified' => 1727109640,
    'size' => 4183,
    'data' => [
        'header' => [
            'title' => 'docenti'
        ],
        'frontmatter' => 'title: docenti',
        'markdown' => '# Gestione aula informatica (sezione DOCENTI)

Il GASL offre alcuni servizi ai docenti e agli amministratori di sistema. Alcuni di questi servizi sono disponibili solo tramite protocollo HTTPS e causeranno la visualizzazione di messaggi di avvertimenti dal parte del vostro browser. Se volete far sparire questi messaggi e navigare più sicuri, leggete quello che c\'è da sapere sulla autorità di certificazione del GASL.

In tutti i casi in cui sono richiesti username e password, questi sono gli stessi utilizzati per accedere ai computer in aula informatica.

## Monitoraggio computer aula informatica

È stato installato il software [Veyon](https://veyon.io/it/ "Veyon") per il monitoraggio e la gestione dell\'aula. Questo vuol dire che i docenti possono mandare messaggi ai vari utenti dell\'aula, vedere sul proprio PC quello che gli studenti stanno facendo oppure proiettare sullo schermo dello studente il contenuto del proprio desktop. Per utilizzare Veyon, è sufficie

## Gestione accesso a internet dall\'aula informatica

È possibile impedire agli studenti di accedere ad Internet dai computer dell\'aula informatica. Utilizzare a tal scopo, **solo all\'interno dell\'aula informatica**, l\'applicazione web all\'indirizzo [http://services.labeconomia.unich.it/proxymanager/](#). L\'applicazione presenta al momento una interfaccia utente molto spartana, ma dovrebbe essere funzionante. L\'accesso è riservato ai docenti.

## Accesso remoto grafico all\'aula informatica

È possibile connettersi da ufficio o da casa ad un client speciale dell\'aula informatica (ai-remote). Sarà come trovarsi direttamente di fronte ad un computer dell\'aula. Basta andare con un browser all\'indirizzo [https://guacamole.unich.it.](https://guacamole.unich.it.) L\'accesso è riservato ai docenti e agli studenti esplicitamente abilitati.

## Accesso remoto a PHPMyAdmin

Il programma PHPMyAdmin per la gestione via web di MySQL è disponibile, sia per i docenti che per gli studenti, all\'indirizzo [https://gasl.unich.it/phpmyadmin/](https://gasl.unich.it/phpmyadmin/) o [http://lamp/phpmydadmin/](http://lamp/phpmydadmin/) da dentro l\'aula informatica.

## Accesso remoto all\'aula informatica con VPN

Per chi avesse esigenze più complesse per le quali è richiesto l\'accesso ad altre macchine dell\'aula informatica (in pratica, solo gli amministratori di rete), è possibile utilizzare una rete privata virtuale con OpenVPN. Per poter utilizzare OpenVPN è necessario ottenere una chiave privata e un certificato personale firmato dalla autorità di certificazione del GASL. Ci sono due modi per ottenere questi file:
1. Chiedere a [gasl@unich.it](mailto:gasl@unich.it) di generare entrambi;
2. Generare in proprio una chiave privata e un CSR (Certificate Signing Request), e inviare quest\'ultimo a [gasl@unich.it](mailto:gasl@unich.it).
Il GASL vi farà avere: a) il cerificato, b) una chiave condivisa (shared key), c) una chiave privata, nel caso si sia scelta l\'opzione 1. A questo punto occorrerà configurare OpenVPN con i seguenti dati:

+ gateway: dolphin.unich.it sulla porta standard 1194;
+ dispositivo di rete virtuale: TUN;
+ compressione LZO: attiva;
+ certificato, chiave privata e chiave condivisa ottenuti dal GASL;
+ certificato della Certification Authority del GASL: GASL_CA.crt;
+ direzione chiave condivisa: 1

Se il vostro client OpenVPN è grafico, impostate i parametri di cui sopra. Se usate invece il client OpenVPN ufficiale, potete prendere come modello il file vpnclient.conf e modificare opportunamente le righe che iniziano con `ca`, `cert`, `key` e `tls-auth` inserendo i nomi dei file che contengono, rispettivamente, certificato della CA, il vostro certificato, la vostra chiave privata e la chiave condivisa.

## Altri servizi per gli amministratori

I seguenti servizi sono riservati aglli amministratori di sistema:

+ Servizio di monitoraggio dei server ed apparecchiature di rete, al sito [https://zabbix.labeconomia.unich.it:8080/](https://zabbix.labeconomia.unich.it:8080/).
+ Servizio di configurazione IPA, al sito [https://ipa1.labeconomia.unich.it/](https://ipa1.labeconomia.unich.it/) solo da dentro l\'aula informatica.'
    ]
];
