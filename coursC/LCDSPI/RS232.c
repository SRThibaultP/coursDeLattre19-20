#include <xc.h>
#define _XTAL_FREQ 4000000

void init_serie(void);
char getch(void);
void putch(char );


// Initialisation de la liaison s�rie du PIC 16F887
void init_serie(void)
{
    SPBRG = 25;       // 9600 bauds pour un quartz de 4 MHz
    TXSTA = 0b00100100; //transmit enable, async, high speed mode
    RCSTA = 0b10000000; //serial port enable
    // Validation de l'�mission et de la r�ception de la liaison s�rie du PIC 16F887
    TXEN=1;
    BRGH=1;
    SPEN=1;
    CREN=1;
 }


// Ecriture d'un caract�re
void putch(char data)
{                            
    while(!TRMT);  // Attente buffer vide
    TXREG = data;  // envoi caract�re
}


// lecture d'un caract�re
char getch()
{                          
    while(!RCIF);  // Attente arriv�e caract�re
    return RCREG;  // Renvoi du caract�re re�u
}