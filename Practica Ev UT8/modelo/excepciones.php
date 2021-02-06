<?php
// Excepción imagenes
class BadImgException extends Exception
{
}

// Excepciones parametros
class ParametrosException extends Exception
{
}
class LongitudParametrosException extends ParametrosException
{
}


// Excepciones BD
class BDException extends Exception
{
}
class UsuarioYaRegistradoException extends BDException
{
}
class UsuarioNoRegistradoException extends BDException
{
}
class BadInsertException extends BDException
{
}