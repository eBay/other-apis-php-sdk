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

class PackageStatusEnum extends Enum {
    public const D_E_C_L_A_R_E_D__F_A_I_L_E_D = "DECLARED_FAILED";
    public const P_A_C_K_A_G_E__I_N_F_O__L_A_C_K = "PACKAGE_INFO_LACK";
    public const N_O__U_S_E_F_U_L__S_H_I_P_P_I_N_G = "NO_USEFUL_SHIPPING";
    public const S_E_L_E_C_T_E_D__S_H_I_P_P_I_N_G = "SELECTED_SHIPPING";
    public const A_P_P_L_I_E_D__T_R_A_C_K_I_N_G__C_O_D_E = "APPLIED_TRACKING_CODE";
    public const T_O__B_E__S_H_I_P_P_E_D = "TO_BE_SHIPPED";
    public const T_O__B_E__R_E_C_E_I_V_E_D = "TO_BE_RECEIVED";
    public const D_E_L_I_V_E_R_E_D = "DELIVERED";
    public const O_N__S_H_I_P_P_I_N_G = "ON_SHIPPING";
    public const D_E_L_E_T_E_D = "DELETED";
    public const S_H_I_P_P_E_D__E_R_R_O_R = "SHIPPED_ERROR";
    public const D_E_L_I_V_E_R_Y__E_R_R_O_R = "DELIVERY_ERROR";
    public const R_E_T_U_R_N_E_D = "RETURNED";
    public const E_X_C_E_P_T_I_O_N = "EXCEPTION";
    public const F_D_C_V_A_L_I_D_A_T_I_O_N_F_A_I_L_E_D = "FDCVALIDATIONFAILED";
    public const F_D_C_V_A_L_I_D_A_T_I_O_N_I_N_P_R_O_G_R_E_S_S = "FDCVALIDATIONINPROGRESS";
    public const D_E_L_I_V_E_R_Y__E_X_C_E_P_T_I_O_N = "DELIVERY_EXCEPTION";
}
