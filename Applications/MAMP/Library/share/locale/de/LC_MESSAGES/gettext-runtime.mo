??            )   ?      ?  B   ?  9   ?  M        \  (   x     ?  e   ?  :       O  ?  i  ?  H     ?     ?  1   	  &   3	     Z	     i	  "   ~	  9   ?	  I   ?	  ?   %
     ?
     ?
     ?
     ?
               1  ?  =  C      @   D  Q   ?      ?  +   ?     $  {   1  I   ?  A  ?  )  9  ?  c          '  ,   >  *   k     ?     ?  #   ?  D   ?  V   '  ?   ~     D     Y      v     ?     ?     ?     ?     	          
                                                                                                                             -V, --version               output version information and exit
   -h, --help                  display this help and exit
   -v, --variables             output the variables occurring in SHELL-FORMAT
 %s: invalid option -- '%c'
 %s: option requires an argument -- '%c'
 Bruno Haible Display native language translation of a textual message whose grammatical
form depends on a number.
 Display native language translation of a textual message.
 If the TEXTDOMAIN parameter is not given, the domain is determined from the
environment variable TEXTDOMAIN.  If the message catalog is not found in the
regular directory, another location can be specified with the environment
variable TEXTDOMAINDIR.
Standard search directory: %s
 If the TEXTDOMAIN parameter is not given, the domain is determined from the
environment variable TEXTDOMAIN.  If the message catalog is not found in the
regular directory, another location can be specified with the environment
variable TEXTDOMAINDIR.
When used with the -s option the program behaves like the 'echo' command.
But it does not simply copy its arguments to stdout.  Instead those messages
found in the selected catalog are translated.
Standard search directory: %s
 In normal operation mode, standard input is copied to standard output,
with references to environment variables of the form $VARIABLE or ${VARIABLE}
being replaced with the corresponding values.  If a SHELL-FORMAT is given,
only those environment variables that are referenced in SHELL-FORMAT are
substituted; otherwise all environment variables references occurring in
standard input are substituted.
 Informative output:
 Operation mode:
 Substitutes the values of environment variables.
 Try '%s --help' for more information.
 Ulrich Drepper Unknown system error Usage: %s [OPTION] [SHELL-FORMAT]
 Usage: %s [OPTION] [TEXTDOMAIN] MSGID MSGID-PLURAL COUNT
 Usage: %s [OPTION] [[TEXTDOMAIN] MSGID]
or:    %s [OPTION] -s [MSGID]...
 When --variables is used, standard input is ignored, and the output consists
of the environment variables that are referenced in SHELL-FORMAT, one per line.
 Written by %s.
 error while reading "%s" memory exhausted missing arguments standard input too many arguments write error Project-Id-Version: gettext-runtime 0.19.4.73
Report-Msgid-Bugs-To: bug-gettext@gnu.org
PO-Revision-Date: 2015-06-25 12:17+0200
Last-Translator: Philipp Thomas <pth@suse.de>
Language-Team: German <translation-team-de@lists.sourceforge.net>
Language: de
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Bugs: Report translation errors to the Language-Team address.
Plural-Forms: nplurals=2; plural=(n != 1);
   -V, --version                Versionsnummer anzeigen und beenden
   -h, --help                   diese Hilfe anzeigen und beenden
   -v, --variables              Variablen ausgeben, die im SHELL-FORMAT vorkommen
 %s: ungültige Option -- »%c«
 %s: Option erwartet ein Argument -- »%c«
 Bruno Haible Übersetzung einer textuellen Meldung, deren grammatische Form von einer Zahl
abhängt, in einer nativen Sprache anzeigen.
 Übersetzung einer textuellen Meldung in einer nativen Sprache anzeigen.
 Wenn der Parameter BEREICH nicht angegeben wurde, wird der Bereich durch die
Umgebungsvariable TEXTDOMAIN bestimmt.  Wenn der Katalog dieses Bereiches
sich nicht im Standardverzeichnis des Systems befindet, kann durch die
Umgebungsvariable TEXTDOMAINDIR ein anderes Verzeichnis angegeben werden.

Standardverzeichnis: %s
 Wenn der Parameter TEXTBEREICH nicht angegeben wurde, wird der Bereich durch
die Umgebungsvariable TEXTDOMAIN bestimmt.  Wenn der Katalog dieses Bereiches
sich nicht im Standardverzeichnis des Systems befindet, kann durch die
Umgebungsvariable TEXTDOMAINDIR ein anderes Verzeichnis angegeben werden.

Wenn die Option »-s« angegeben ist, verhält sich das Programm wie der Befehl
»echo«.  Aber anstatt alle Argumente einfach auszugeben, werden diese
übersetzt, falls sie im angegebenen Katalog (Textbereich) vorhanden sind.

Standardverzeichnis: %s
 Im normalen Betriebsmodus wird die Standardeingabe zur Standardausgabe kopiert.
Dabei werden Referenzen auf Umgebungsvariablen in der Formatform $VARIABLE oder
${VARIABLE} durch die entsprechenden Werte ersetzt.  Wenn ein SHELL-FORMAT
angegeben ist, werden nur die Umgebungsvariablen, die im SHELL-FORMAT
referenziert, substituiert; andernfalls werden alle Referenzen auf
Umgebungsvariablen bei der Standardausgabe substituiert.
 Informative Ausgabe:
 Art der Verarbeitung:
 Werte der Umgebungsvariablen substituieren.
 »%s --help« gibt weitere Informationen.
 Ulrich Drepper Unbekannter Systemfehler Aufruf: %s [OPTION] [SHELL-FORMAT]
 Aufruf: %s [OPTION] [TEXTBEREICH] SCHLÜSSEL SCHLÜSSEL-PLURAL ZAHL
 Aufruf: %s [OPTION] [[TEXTBEREICH] SCHLÜSSEL]
oder:   %s [OPTION] -s [SCHLÜSSEL]...
 Wenn --variables verwendet wird, wird die Standardeingabe ignoriert und die
Standardausgabe wird aus allen Umgebungsvariablen bestehen, die im
SHELL-FORMAT referenziert sind, immer eine pro Zeile.
 Geschrieben von %s.
 Fehler beim Lesen von »%s« virtueller Speicher aufgebraucht Argumente fehlen Standardeingabe zu viele Argumente Fehler beim Schreiben 