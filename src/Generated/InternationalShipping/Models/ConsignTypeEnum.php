<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\OtherApis\Generated\InternationalShipping\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConsignTypeEnum extends Enum {
    public const P_I_C_K__U_P = "PICK_UP";
    public const D_R_O_P__O_F_F = "DROP_OFF";
    public const F_O_R_W_A_R_D__D_E_P_L_O_Y_M_E_N_T = "FORWARD_DEPLOYMENT";
    public const R_D_C = "RDC";
    public const C_N__P_O_S_T__D_R_O_P__O_F_F = "CN_POST_DROP_OFF";
    public const C_N__P_O_S_T__P_I_C_K__U_P = "CN_POST_PICK_UP";
    public const H_K__P_O_S_T__D_R_O_P__O_F_F = "HK_POST_DROP_OFF";
}
