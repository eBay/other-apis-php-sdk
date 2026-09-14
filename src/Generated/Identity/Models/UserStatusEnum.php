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

namespace EBay\OtherApis\Generated\Identity\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UserStatusEnum extends Enum {
    public const C_O_N_F_I_R_M_E_D = "CONFIRMED";
    public const U_N_C_O_N_F_I_R_M_E_D = "UNCONFIRMED";
    public const A_C_C_O_U_N_T_O_N_H_O_L_D = "ACCOUNTONHOLD";
    public const U_N_D_E_T_E_R_M_I_N_E_D = "UNDETERMINED";
}
