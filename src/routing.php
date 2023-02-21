<?php

use douggonsouza\routes\router;

// roteamento da requisição
router::routing('GET', "/", "\\douggonsouza\\discovery\\controls\\login");
router::routing('POST', "/", "\\douggonsouza\\discovery\\controls\\login");
router::routing('GET', "/login", "\\douggonsouza\\discovery\\controls\\login");
router::routing('POST', "/login", "\\douggonsouza\\discovery\\controls\\login");
router::routing('GET', "/register", "\\douggonsouza\\discovery\\controls\\register");
router::routing('POST', "/register", "\\douggonsouza\\discovery\\controls\\register");
router::routing('GET', "/forgetpass", "\\douggonsouza\\discovery\\controls\\forgetpass");
router::routing('GET', "/admin/dashboard", "\\douggonsouza\\discovery\\controls\\admin\\dashboard");
// router::route('GET', "/admin/dashboard", "\\douggonsouza\\discovery\\controls\\admin\\dashboard");
router::routing('GET', "/admin/perfil", "\\douggonsouza\\discovery\\controls\\admin\\perfil");
router::routing('GET', "/admin/newpage", "\\douggonsouza\\discovery\\controls\\admin\\pages");
router::routing('POST', "/admin/newpage", "\\douggonsouza\\discovery\\controls\\admin\\pages");
router::routing('GET', "/admin/readpage", "\\douggonsouza\\discovery\\controls\\admin\\pages:read");
router::routing('GET', "/admin/acesses", "\\douggonsouza\\discovery\\controls\\admin\\accesses");
router::routing('POST', "/api/pagesofaccess/_number/json", "\\douggonsouza\\discovery\\controls\\admin\\accesses:pagesOfAccess");
router::routing('GET', "/admin/accesspage", "\\douggonsouza\\discovery\\controls\\admin\\accessesPages");
router::routing('POST', "/admin/accesspage", "\\douggonsouza\\discovery\\controls\\admin\\accessesPages");
router::routing('GET', "/admin/stepone", "\\douggonsouza\\discovery\\controls\\admin\\stepsOne");
router::routing('POST', "/admin/stepone", "\\douggonsouza\\discovery\\controls\\admin\\stepsOne");

router::end('404');
?>
