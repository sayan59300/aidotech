/**
 * controle de la selection au niveau d'un select
 * @param {type} field
 * @returns {Number}
 */
function select_statut(field) {
  var selection = document.getElementById(field);
  var valeur = selection.options[selection.selectedIndex].value;

  if (valeur === 'defaut')
  {
    return 0;
  } else
  {
    return 1;
  }
}

/**
 * affichage dinamique courant/max input
 * @param {type} field
 * @param {type} output
 * @returns {Number}
 */
function updatelength(field, output) {
  var curr_length = document.getElementById(field).value.length;
  var field_mlen = document.getElementById(field).maxLength;
  document.getElementById(output).innerHTML = curr_length + '/' + field_mlen;
  return 1;
}

/**
 * comparaison égalité input
 * @param {type} field
 * @param {type} field2
 * @returns {Number}
 */
function compare_valid(field, field2) {
  var fld_val = document.getElementById(field).value;
  var fld2_val = document.getElementById(field2).value;
  if (fld_val === fld2_val) {
    update_css_class(field2, 2);
    var p_valid_r = 1;
  } else {
    update_css_class(field2, 1);
    var p_valid_r = 0;
  }
  return p_valid_r;
}

/**
 * validation format mail
 * @param {type} field
 * @returns {Number}
 */
function check_v_mail(field) {
  var email = document.getElementById(field).value;
  var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
  if (reg.test(email)) {
    var m_valid_r = 1;
  } else {
    var m_valid_r = 0;
  }
  return m_valid_r;
}

/**
 * validation du format téléphone
 * @param {type} field
 * @returns {Number}
 */
function check_v_tel(field) {
  var tel = document.getElementById(field).value;
  var reg = new RegExp('^(01|02|03|04|05|06|07|08|09)[0-9]{8}$');
  if (reg.test(tel) || tel === "") {
    var t_valid_r = 1;
  } else {
    var t_valid_r = 0;
  }
  return t_valid_r;
}

/**
 * appelé par ajax pour affichage de réponse
 * @returns {Number}
 */
function check_login()
{
  var check_login = document.getElementById('msgbox').textContent;

  if (check_login === 'Ce pseudo est disponible')
  {
    return 1;
  } else if (check_login === 'Ce pseudo est déjà pris')
  {
    return 0;
  }
}

/**
 * validation de longueur de chaine de caractère
 * @param {type} field
 * @returns {Number}
 */
function valid_length(field) {
  var length_df = document.getElementById(field).value.length;
  if (length_df >= 1 && length_df <= document.getElementById(field).maxLength) {
    update_css_class(field, 2);
    var ret_len = 1;
  } else {
    update_css_class(field, 1);
    var ret_len = 0;
  }
  return ret_len;
}

/**
 * contrôle des champs d'ajout d'utilisateur
 * @param {type} output
 * @returns {Boolean}
 */
function validate_all(output) {
  var t1 = valid_length('nom_util_add');
  var t2 = valid_length('prenom_util_add');
  var t3 = check_v_mail('email_util_add');
  var t4 = compare_valid('email_util_add', 'verif_email_util_add');
  var t5 = valid_length('pseudo_util_add');
  var t7 = check_v_tel('tel_util_add');
  var t8 = check_login();

  var error = 0;
  var errorlist = "";

  errorlist += "<div class='alert alert-danger'><h3>Erreurs de saisie : </h3><br/> <hr />";

  if (!t1) {
    error++;
    errorlist += "Entrez un nom<br/><br/>";
  }
  if (!t2) {
    error++;
    errorlist += "Entrez un prenom<br/><br/>";
  }
  if (!t8) {
    error++;
    errorlist += "Pseudo non valide<br/><br/>";
  }
  if (!t5) {
    error++;
    errorlist += "Entrez un nom d'utilisateur<br/><br/>";
  }
  if (!t3) {
    error++;
    errorlist += "Le format de l'email n'est pas valide<br/><br/>";
  }
  if (!t4) {
    error++;
    errorlist += "La confirmation de l'Email n'est pas correcte<br/><br/>";
  }
  if (!t7) {
    error++;
    errorlist += "Numéro de téléphone non valide<br/><br/>";
  }

  errorlist += "</div>";

  if (error !== 0) {
    document.getElementById(output).innerHTML = errorlist;
    return false;
  } else
  {
    return true;
  }
}

/**
 * confirmation d'action au click
 * @returns {Boolean}
 */
function validate_sel() {
  if (document.getElementById("sel").value !== 'defaut')
  {
    if (confirm("Etes vous sur de vouloir effectuer cette action ?"))
    {
      return true;
    } else
    {
      return false;
    }
  } else
  {
    alert("Aucune sélection");
    return false;
  }
}

/**
 * changement de classe css
 * @param {type} field
 * @param {type} class_index
 * @returns {Number}
 */
function update_css_class(field, class_index) {
  if (class_index === 1) {
    var class_s = 'wrong';
  } else if (class_index === 2) {
    var class_s = 'correct';
  }
  document.getElementById(field).className = class_s;
  return 1;
}


