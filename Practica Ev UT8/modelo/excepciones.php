<?php
// Excepción imagenes

// Excepciones parametros
class ParametrosException extends Exception
{
}
class BadImgException extends ParametrosException
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
class NoFilasAfectadasException extends BDException
{
}