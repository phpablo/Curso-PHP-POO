<?php
require_once 'video.php';

interface AcoesVideo {
  function play();
  function pause();
  function like();
}
