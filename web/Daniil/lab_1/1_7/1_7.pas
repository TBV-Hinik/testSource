PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  StrLen, I: INTEGER;
  Str, ResultStr: STRING;
  Find: BOOLEAN;
BEGIN {GetQueryStringParameter}
  Str := GetEnv('QUERY_STRING');
  StrLen := LENGTH(Str);
  ResultStr := '';
  Find := FALSE;
  
  IF POS(Key, Str) > 0
  THEN
    BEGIN
      I := POS(Key, Str);
      WHILE (I <= StrLen) AND NOT Find
      DO
        BEGIN
          IF Str[I] = '='
          THEN
            BEGIN
              I := I + 1;
              WHILE (I <= StrLen) AND (Str[I] = ' ')
              DO
                I := I + 1;
              WHILE (I <= StrLen) AND (Str[I] <> ' ') AND (Str[I] <> '&')
              DO
                BEGIN
                  ResultStr := ResultStr + Str[I];
                  I := I + 1
                END;
              Find := TRUE
            END; 
          I := I + 1
        END
    END;
    
  IF ResultStr <> ''
  THEN
    GetQueryStringParameter := ResultStr
  ELSE  
    GetQueryStringParameter := ''
END; {GetQueryStringParameter}

BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}

