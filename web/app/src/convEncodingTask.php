<?php
/**
 * Эта задача предназначена для изменения кодировок файлов.
 *
 * @author Стаценко Владимир <vova_33@gala.net>
 * @link http://www.simplecoding.org
 */
namespace App\Acme;
/**
 * Задача для преобразования кодировок файлов.
 */
class convEncodingTask extends \Task {
  /**
   * исходные файлы
   *
   * @var  FileSet
   */
  protected $filesets    = array();
  /**
   * Эта переменная указывает, нужно ли прервать работу если возникнут ошибки
   *
   * @var boolean
   */
  protected $failonerror = false;
  /**
   * директория в которую будем складывать преобразованные файлы
   *
   * @var  string
   */
  protected $targetDir;
  /**
   * исходная кодировка
   *
   * @var  string
   */
  protected $fromEncoding;
  /**
   * заданная кодировка
   *
   * @var  string
   */
  protected $toEncoding;

  /**
   *  Создание списка файлов
   */
  public function createFileSet() {
    $num = array_push($this->filesets, new \FileSet());
    return $this->filesets[$num - 1];
  }

  /**
   * Установка failonerror
   *
   * @param boolean $value
   */
  public function setFailonerror($value) {
    $this->failonerror = $value;
  }

  /**
   * Установка targetDir
   *
   * @param  string  $targetDir
   */
  public function setTargetDir($targetDir) {
    $this->targetDir = $targetDir;
  }
  /**
   * Установка fromEncoding
   *
   * @param  string  $formEncoding
   */
  public function setFromEncoding($fromEncoding) {
    $this->fromEncoding = $fromEncoding;
  }
  /**
   * Установка toEncoding
   *
   * @param  string  $toEncoding
   */
  public function setToEncoding($toEncoding) {
    $this->toEncoding = $toEncoding;
  }

  /**
   * Инициализация
   */
  public function init() {
    return true;
  }

  /**
   * Точка входа (выполнение задачи начинается здесь)
   */
  public function main() {
    //проверяем, установлен ли модуль Multibyte String
    if (function_exists("mb_convert_encoding")) {
      //начинаем обработку
      //(у нас может быть несколько наборов файлов FileSet)
      foreach ($this->filesets as $fs) {
        try {
          //получаем массив со списком исходных файлов
          $files = $fs->getDirectoryScanner($this->project)->getIncludedFiles();
          $fullPath = realpath($fs->getDir($this->project));
          //изменяем кодировку каждого файла
          foreach ($files as $file) {
            $this->log('Converting file ' . $file);
            //формируем путь к конвертированному файлу
            $target = $this->targetDir . '/' . str_replace($fullPath, '', $file);
            if (file_exists(dirname($target)) == false) {
              mkdir(dirname($target), 0700, true);
            }
            //конвертируем файл
            file_put_contents($target, mb_convert_encoding(file_get_contents($fullPath . '/' . $file), $this->toEncoding, $this->fromEncoding));
          }
        } catch (BuildException $be) {
          // папка не существует или доступ к ней закрыт
          if ($this->failonerror) {
            throw $be;
          } else {
            $this->log($be->getMessage(), $this->quiet ? Project::MSG_VERBOSE : Project::MSG_WARN);
          }
        }
      }
    }
    else {
      //ошибка (недоступна функция mb_convert_encoding)
      $be = new \BuildException('No Multibyte String support');
      if ($this->failonerror) {
        throw $be;
      }
      else {
        //если нужно продолжать выполнение build файла, несмотрая на ошибку, просто пишем в лог
        $this->log($be->getMessage(), $this->quiet ? Project::MSG_VERBOSE : Project::MSG_WARN);
      }
    }
  }
}
?>