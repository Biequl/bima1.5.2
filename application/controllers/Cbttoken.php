<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbttoken extends CI_Controller { public function __construct() { goto TR3Uf; xEJna: $this->load->model("\114\157\147\x5f\x6d\x6f\x64\x65\154", "\154\x6f\x67\147\151\156\147"); goto nUDaz; WLXpK: redirect("\141\165\x74\x68"); goto TLsuY; thATj: $this->load->model("\115\x61\163\164\x65\162\137\x6d\157\x64\x65\x6c", "\155\x61\x73\164\145\162"); goto gYoRV; UmQ_f: $this->load->library(["\144\x61\x74\x61\x74\141\x62\x6c\x65\163", "\x66\x6f\162\155\137\x76\141\154\151\x64\x61\164\x69\157\x6e"]); goto thATj; RZxya: goto z3b9N; goto Nu1Tl; E1jTV: show_error("\110\141\x6e\171\x61\40\101\144\x6d\x69\156\151\163\164\162\x61\x74\157\162\x20\171\141\x6e\x67\40\144\x69\x62\x65\162\x69\40\150\x61\x6b\40\165\x6e\x74\165\x6b\x20\155\x65\x6e\x67\141\x6b\x73\145\x73\x20\150\141\x6c\x61\155\x61\x6e\40\151\x6e\151\54\x20\x3c\x61\x20\150\x72\145\146\x3d\x22" . base_url("\144\141\x73\x68\x62\x6f\x61\x72\x64") . "\x22\76\x4b\x65\x6d\142\141\x6c\x69\x20\x6b\145\40\x6d\x65\x6e\x75\x20\141\167\141\154\x3c\x2f\x61\76", 403, "\101\x6b\x73\145\163\40\124\x65\162\x6c\x61\162\x61\156\x67"); goto JJZ1R; TLsuY: z3b9N: goto UmQ_f; T6Doq: if (!$this->ion_auth->logged_in()) { goto NNsGz; } goto EnhOd; EnhOd: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\162\165"))) { goto QRGV6; } goto E1jTV; dkzAl: $this->load->model("\103\142\164\x5f\155\157\144\x65\x6c", "\x63\142\x74"); goto xEJna; JJZ1R: QRGV6: goto RZxya; Nu1Tl: NNsGz: goto WLXpK; TR3Uf: parent::__construct(); goto KqDTd; KqDTd: $this->load->dbforge(); goto T6Doq; gYoRV: $this->load->model("\104\x61\x73\x68\142\157\x61\x72\x64\137\155\x6f\x64\x65\x6c", "\x64\x61\163\150\x62\157\x61\162\144"); goto dkzAl; nUDaz: $this->form_validation->set_error_delimiters('', ''); goto mj_sK; mj_sK: } public function output_json($data, $encode = true) { goto CxwQB; GGO30: $this->output->set_content_type("\141\160\160\x6c\x69\143\141\x74\151\x6f\156\x2f\152\x73\157\156")->set_output($data); goto d8vXA; DfWH7: nWcw0: goto GGO30; CxwQB: if (!$encode) { goto nWcw0; } goto uxda0; uxda0: $data = json_encode($data); goto DfWH7; d8vXA: } public function index() { goto o8dUN; CDUpc: $this->load->view("\137\x74\145\155\x70\154\x61\x74\145\163\57\144\x61\x73\x68\142\x6f\x61\x72\x64\x2f\x5f\150\x65\x61\x64\145\162", $data); goto uZQ0o; kdCtl: $data["\x74\x70"] = $this->dashboard->getTahun(); goto AK6Gf; hrTKj: $smt = $this->master->getSemesterActive(); goto kdCtl; uGdvt: O7qc9: goto DSArU; f3pF3: $this->load->view("\x5f\164\x65\155\x70\154\x61\164\145\x73\x2f\x64\141\x73\x68\x62\x6f\141\162\x64\57\x5f\146\x6f\157\164\x65\162"); goto A_8fN; Us79g: $this->load->view("\155\145\x6d\142\x65\162\x73\x2f\147\x75\162\165\x2f\x74\145\155\x70\x6c\x61\x74\145\163\x2f\x66\157\x6f\164\x65\162"); goto vrq4b; GFaSN: $token = $this->cbt->getToken(); goto k3eKB; xIIWh: $this->load->view("\x6d\x65\x6d\142\145\x72\163\x2f\147\165\162\x75\57\143\x62\164\57\164\157\153\x65\156\57\144\141\x74\141"); goto Us79g; o8dUN: $user = $this->ion_auth->user()->row(); goto S0mRy; d8wEg: $data["\163\x6d\164\x5f\x61\x63\164\151\166\145"] = $smt; goto GFaSN; DSArU: $data["\160\162\x6f\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto CDUpc; k3eKB: $tkn["\x74\157\x6b\145\x6e"] = ''; goto tWz52; EgC04: if ($this->ion_auth->is_admin()) { goto O7qc9; } goto Aca_b; Aca_b: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto OR4Qo; VJVPu: $this->load->view("\x6d\x65\155\142\x65\x72\163\x2f\x67\165\x72\x75\57\x74\145\155\x70\x6c\x61\164\145\163\57\150\145\x61\144\x65\x72", $data); goto xIIWh; vrq4b: goto vrINN; goto uGdvt; S0mRy: $data = ["\165\163\145\162" => $user, "\x6a\x75\x64\x75\154" => "\124\x6f\x6b\x65\156\x20\x55\152\x69\141\x6e", "\163\165\x62\x6a\x75\x64\x75\154" => "\124\157\153\x65\156", "\163\x65\x74\x74\151\156\x67" => $this->dashboard->getSetting()]; goto r9Fix; tWz52: $tkn["\x61\x75\164\x6f"] = "\x30"; goto s5SLZ; A_8fN: vrINN: goto yFwEr; OR4Qo: $data["\x67\x75\x72\165"] = $guru; goto VJVPu; AK6Gf: $data["\x74\160\x5f\x61\143\164\x69\166\145"] = $tp; goto FwAWx; uruvi: $data["\x74\157\x6b\145\156"] = $token != null ? $token : json_decode(json_encode($tkn)); goto EgC04; FwAWx: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto d8wEg; r9Fix: $tp = $this->master->getTahunActive(); goto hrTKj; s5SLZ: $tkn["\x6a\141\162\141\153"] = "\x31"; goto itRJx; itRJx: $tkn["\x65\x6c\141\160\x73\x65\144"] = "\60\60\72\60\60\x3a\60\x30"; goto uruvi; uZQ0o: $this->load->view("\143\x62\164\57\164\x6f\x6b\x65\x6e\x2f\144\x61\x74\141"); goto f3pF3; yFwEr: } public function generateToken() { goto rV5ab; CQurb: $this->output_json($token); goto Dau0T; d0a_p: $new = $this->createNewToken(); goto HYMEI; OYfTd: $mulai = new DateTime($token->updated); goto wSBFA; sTioh: if (!($total_minutes >= $post_token->jarak)) { goto VTQnX; } goto d0a_p; rLAK6: goto qBets; goto I_thV; UUxLr: VTQnX: goto rLAK6; I_thV: z4D8_: goto Bd2u2; zbJMe: $this->cbt->saveToken($post_token); goto UUxLr; NIGUf: $token = $this->cbt->getToken(); goto U9rEf; qQaLL: $post_token->updated = $updated; goto hk0yq; rV5ab: $post_token = json_decode($this->input->get("\144\x61\164\x61")); goto MhnOv; IAqPO: if ($force == "\61") { goto z4D8_; } goto OYfTd; f2Uo4: $total_minutes += $diff->i; goto sTioh; rV9N0: $updated = date("\x59\x2d\155\55\x64\x20\x48\72\x69\x3a\163"); goto IAqPO; U66rH: $total_minutes = $diff->days * 24 * 60; goto k8jIG; hk0yq: $this->cbt->saveToken($post_token); goto Ms523; ScmHY: $post_token->token = $new; goto qQaLL; U9rEf: $token->now = $updated; goto CQurb; MhnOv: $force = $this->input->get("\146\157\x72\x63\x65"); goto MUX0E; HYMEI: $post_token->token = $new; goto BSiif; BSiif: $post_token->updated = $updated; goto zbJMe; Ms523: qBets: goto NIGUf; wSBFA: $diff = $mulai->diff(new DateTime()); goto U66rH; Bd2u2: $new = $this->createNewToken(); goto ScmHY; MUX0E: $token = $this->cbt->getToken(); goto rV9N0; k8jIG: $total_minutes += $diff->h * 60; goto f2Uo4; Dau0T: } public function loadToken() { goto LkJzE; ObnF_: jg1je: goto d5jb9; wO5gu: goto jg1je; goto gnvhh; gnvhh: hgi2G: goto bnxAs; m8_62: $data["\141\x75\x74\x6f"] = "\x30"; goto acCPw; b6Rqm: foreach ($dataflds as $fild) { goto zMKwL; fcOdr: $table_changed = $this->dbforge->modify_column("\143\x62\164\137\164\x6f\153\145\156", $field); goto g4O32; bd8m5: hPJ4p: goto Yyscj; zMKwL: if (!($fild->name == "\165\160\x64\x61\x74\145\x64")) { goto hPJ4p; } goto yTGwf; WbqQe: $field = ["\x75\160\x64\141\x74\x65\x64" => array("\164\x79\160\145" => "\126\x41\122\103\110\101\x52", "\143\x6f\x6e\163\x74\x72\x61\151\156\164" => 20, "\x64\145\146\x61\x75\x6c\x74" => '')]; goto fcOdr; yTGwf: if (!($fild->type != "\x76\141\x72\x63\x68\x61\162")) { goto moL0y; } goto WbqQe; g4O32: moL0y: goto bd8m5; Yyscj: t3PQK: goto tr4ZZ; tr4ZZ: } goto YSNxl; TPdH7: $token->now = date("\131\x2d\x6d\55\144\40\x48\x3a\x69\x3a\x73"); goto hB3vz; RDqFK: $table_changed = false; goto b6Rqm; hB3vz: $this->output_json($token); goto wO5gu; YSNxl: g4u0O: goto Xdfyj; Xdfyj: $token = $this->cbt->getToken(); goto V2Ycz; O072Q: $this->output_json($data); goto ObnF_; acCPw: $data["\x65\154\141\160\163\145\144"] = "\x30\x30\72\60\x30\x3a\x30\x30"; goto O072Q; bnxAs: $data["\164\x6f\x6b\145\x6e"] = ''; goto m8_62; V2Ycz: if ($token == null) { goto hgi2G; } goto TPdH7; LkJzE: $dataflds = $this->db->field_data("\143\x62\164\x5f\164\x6f\x6b\x65\x6e"); goto RDqFK; d5jb9: } private function createNewToken() { goto e9Oyr; EYqIL: $new_token .= $random_character; goto fT40n; pRIFy: OQn15: goto gAul2; iAcsD: $new_token = ''; goto e61WI; fT40n: uY_MT: goto ASIyX; e1Xma: goto YLdD4; goto pRIFy; iKSaW: $random_character = $chars[mt_rand(0, $input_length - 1)]; goto EYqIL; kyS2c: YLdD4: goto LgOy3; yIgmq: $input_length = strlen($chars); goto iAcsD; LgOy3: if (!($i < 6)) { goto OQn15; } goto iKSaW; ASIyX: $i++; goto e1Xma; e61WI: $i = 0; goto kyS2c; gAul2: return $new_token; goto hHhPW; e9Oyr: $chars = "\101\102\x43\x44\105\x46\107\x48\111\x4a\x4b\114\x4d\x4e\x4f\x50\121\122\123\124\x55\126\127\130\131\132"; goto yIgmq; hHhPW: } }
