<!--This software was created by mon.im and was modified by Noah.-->    

    <script type='text/javascript'>
      window.addEventListener('load', function () {
        new DllPatcherContainer([
          new DllPatcher('soundvoltex', [
            {
              name: '所有 歌曲/难度 解锁',
              patches: [
                {
                  offset: 0x158052,
                  off: [0xE8, 0x89, 0x5C, 0x02],
                  on: [0xB8, 0x0D, 0x00, 0x00]
                },
                {
                  offset: 0x1BE669,
                  off: [0x8B, 0x44, 0x24, 0x20, 0xE8, 0x3E, 0xEB, 0xFF, 0xFF],
                  on: [0xB8, 0x03, 0x00, 0x00, 0x00, 0x90, 0x90, 0x90, 0x90]
                }
              ]
            },
            {
              name: '全曲 "Safe"',
              tooltip: '失败将不会结束本局游戏',
              patches: [{offset : 0x179393, off: [0x32, 0xC0], on: [0xB0, 0x01]}]
            },
            {
              name: '不在歌曲封面显示 "Safe" 标识',
              tooltip: 'Remove visual clutter',
              patches: [{offset: 0x2FA0E8, off: [0x73], on: [0x00]}]
            },
            {
              name: '启动时更改系统音量',
              patches: [{offset: 0x2540BA, off: [0xE8, 0x21, 0x03, 0x00, 0x00], on: [0x90, 0x90, 0x90, 0x90, 0x90]}]
            },
            {
              name: '启动进入 Event Mode',
              patches: [{offset: 0x19DC52, off: [0x00], on: [0x01]}]
            },
            {
              name: '关闭 EVENT MODE/FREE PLAY 标识',
              patches: [{offset: 0xBF3A0, off: [0xE8, 0x0b], on: [0xEB, 0x03]}]
            },
            {
              name: 'PFree (无限次数游玩)',
              patches: [
                {
                  offset: 0x1D5BCF,
                  off: [0x00],
                  on: [0x02]
                },
                {
                  offset: 0x1D5DB6,
                  off: [0x8B, 0x83, 0x64, 0x10, 0x00, 0x00, 0x8D, 0x48, 0x01, 0x83, 0xF9, 0x04, 0x56, 0x57, 0x7F, 0x52],
                  on: [0xB8, 0x01, 0x00, 0x00, 0x00, 0x89, 0x83, 0x64, 0x10, 0x00, 0x00, 0x90, 0x56, 0x57, 0x90, 0x90]
                }
              ]
            },
            {
              name: '开启 ARS 选项',
              patches: [{offset : 0x178AA4, off: [0x74], on : [0xEB]}]
            },
            {
              name: '时间锁定',
              patches: [{offset: 0x776EB, off: [0x8B, 0x43, 0x60, 0x85, 0xC0, 0x74, 0x04], on: [0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90]}]
            },
            {
              name: 'Non-Effective Rate 从 0% 开始计算',
              patches: [{offset: 0x11FE30, off: [0x10, 0x27], on: [0x01, 0x00]}]
            },
            {
              name: 'Non-Effective Rate 不回血',
              patches: [{offset: 0x1202AA, off: [0x01, 0x50, 0x48], on: [0x90, 0x90, 0x90]}]
            }
          ], "2018-08-21"),
          new DllPatcher('soundvoltex', [
            {
              name: '所有 歌曲/难度 解锁',
              patches: [
                {offset: 0x157F52, off: [0xE8, 0x89, 0x58, 0x02], on: [0xB8, 0x0D, 0x00, 0x00]},
                {
                  offset: 0x1BBD59,
                  off: [0x8B, 0x44, 0x24, 0x20, 0xE8, 0x3E, 0xEB, 0xFF, 0xFF],
                  on: [0xB8, 0x03, 0x00, 0x00, 0x00, 0x90, 0x90, 0x90, 0x90]
                }
              ]
            },
            {
              name: '全曲 "Safe"',
              tooltip: '失败将不会结束本局游戏',
              patches: [{offset: 0x178EF3, off: [0x32, 0xC0], on: [0xB0, 0x01]}]
            },
            {
              // Ported by someone
              // Created by mon
              name: '不在歌曲封面显示 "Safe" 标识',
              patches: [{offset: 0x2F62B8, off: [0x73], on: [0x00]}]
            },
            {
              name: '启动时更改系统音量',
              patches: [{offset: 0x2509fa, off: [0xE8, 0x21, 0x03, 0x00, 0x00], on: [0x90, 0x90, 0x90, 0x90, 0x90]}]
            },
            {
              name: '启动进入 Event Mode',
              patches: [{offset: 0x19d563, off: [0x00], on: [0x01]}]
            },
            {
              name: 'PFree (无限次数游玩)',
              patches: [
                // Augmented by mon to work offline too
                {offset: 0x1D322F, off: [0x00], on: [0x02]},
                {
                  offset: 0x1D33F6,
                  off: [0x8B, 0x83, 0x64, 0x10, 0x00, 0x00, 0x8D, 0x48, 0x01, 0x83, 0xF9, 0x04, 0x56, 0x57, 0x7F, 0x52],
                  on: [0xB8, 0x01, 0x00, 0x00, 0x00, 0x89, 0x83, 0x64, 0x10, 0x00, 0x00, 0x90, 0x56, 0x57, 0x90, 0x90]
                }
              ]
            },
            {
              // Ported by someone
              // Created by mon
              name: '开启 ARS 选项',
              patches: [{offset: 0x178604, off: [0x74], on: [0xEB]}]
            },
            {
              // Ported by someone
              // Created by runner38
              name: '时间锁定',
              tooltip: 'Useful to play with Omega Dimension Ex-Track',
              patches: [{offset: 0x7794B, off: [0x8B, 0x43, 0x60, 0x85, 0xC0, 0x74, 0x04], on: [0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90]}]
            },
            {
              // Ported by someone
              // Created by runner38
              name: 'Non-Effective Rate 从 0% 开始计算',
              patches: [{offset: 0x120090, off: [0x10, 0x27], on: [0x01, 0x00]}]
            },
            {
              // Ported by someone
              // Created by runner38
              name: 'Non-Effective Rate 不回血',
              patches: [{offset: 0x12050A, off: [0x01, 0x50, 0x48], on: [0x90, 0x90, 0x90]}]
            },
          ], "2018-06-05"),
          new DllPatcher('soundvoltex', [
            {
              // Credit to kacklappen23
              name: '所有 歌曲/难度 解锁',
              patches: [
                {offset: 0x154C72, off: [0xE8, 0xA9, 0x44, 0x02], on: [0xB8, 0x0D, 0x00, 0x00]},
                {
                  offset: 0x1B7A79,
                  off: [0x8B, 0x44, 0x24, 0x20, 0xE8, 0x3E, 0xEB, 0xFF, 0xFF],
                  on: [0xB8, 0x03, 0x00, 0x00, 0x00, 0x90, 0x90, 0x90, 0x90]
                }
              ]
            },
            {
              name: '全曲 "Safe"',
              tooltip: '失败将不会结束本局游戏',
              patches: [{offset: 0x1748EB, off: [0x32, 0xC0], on: [0xB0, 0x01]}]
            },
            {
              // Created by mon
              name: '不在歌曲封面显示 "Safe" 标识',
              patches: [{offset: 0x2EE860, off: [0x73], on: [0x00]}]
            },
            {
              name: '启动进入 Event Mode',
              patches: [{offset: 0x1992B2, off: [0x00], on: [0x01]}]
            },
            {
              // created by zini
              // ported by kacklappen23
              name: '关闭 EVENT MODE/FREE PLAY 标识',
              patches: [{offset: 0xBEEF0, off: [0xE8, 0x2B], on: [0xEB, 0x03]}]
            },
            {
              name: 'PFree (无限次数游玩)',
              patches: [
                {offset: 0x1CEE4F, off: [0x00], on: [0x02]},
                {
                  offset: 0x1CF016,
                  off: [0x8B, 0x83, 0x64, 0x10, 0x00, 0x00, 0x8D, 0x48, 0x01, 0x83, 0xF9, 0x04, 0x56, 0x57, 0x7F, 0x52],
                  on: [0xB8, 0x01, 0x00, 0x00, 0x00, 0x89, 0x83, 0x64, 0x10, 0x00, 0x00, 0x90, 0x56, 0x57, 0x90, 0x90]
                }
              ]
            },
            {
              // thanks Element4521
              name: '开启 ARS 选项',
              patches: [{offset: 0x174004, off: [0x74], on: [0xEB]}]
            },
            {
              // Created by runner38
              name: '时间锁定',
              tooltip: 'Useful to play with Omega Dimension Ex-Track',
              patches: [{offset: 0x7749B, off: [0x8B, 0x43, 0x60, 0x85, 0xC0, 0x74, 0x04], on: [0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90]}]
            },
            {
              // Created by zini
              name: '隐藏 PASELI 标识',
              patches: [{offset: 0xBEF2D, off: [0x0F, 0x84], on: [0x90, 0xE9]}]
            },
          ], "2018-01-16 (霸机模式)"),
          new DllPatcher('soundvoltex', [
            {
              name: '所有 歌曲/难度 解锁',
              patches: [{offset: 0x1531F2, off: [0xE8, 0x09, 0x43, 0x02], on: [0xB8, 0x0D, 0x00, 0x00]},
                {
                  offset: 0x1B5F39,
                  off: [0x8B, 0x44, 0x24, 0x20, 0xE8, 0x3E, 0xEB, 0xFF, 0xFF],
                  on: [0xB8, 0x03, 0x00, 0x00, 0x00, 0x90, 0x90, 0x90, 0x90]
                }]
            },
            {
              name: '全曲 "Safe"',
              tooltip: '失败将不会结束本局游戏',
              patches: [{offset: 0x172CDB, off: [0x32, 0xC0], on: [0xB0, 0x01]}]
            },
            {
              // Created by mon
              name: '不在歌曲封面显示 "Safe" 标识',
              tooltip: '移除标识',
              patches: [{offset: 0x2EB3EC, off: [0x73], on: [0x00]}]
            },
            {
              name: '启动进入 Event Mode',
              patches: [{offset: 0x1977D3, off: [0x00], on: [0x01]}]
            },
            {
              name: 'PFree (无限次数游玩)',
              tooltip: '仅保存游玩歌曲状态和分数，任务进程和游戏设置将不会保存',
              patches: [
                {offset: 0x1CC10F, off: [0x00], on: [0x02]},
                {
                  offset: 0x1CC2D6,
                  off: [0x8B, 0x83, 0x64, 0x10, 0x00, 0x00, 0x8D, 0x48, 0x01, 0x83, 0xF9, 0x04, 0x56, 0x57, 0x7F, 0x52],
                  on: [0xB8, 0x01, 0x00, 0x00, 0x00, 0x89, 0x83, 0x64, 0x10, 0x00, 0x00, 0x90, 0x56, 0x57, 0x90, 0x90]
                }
              ]
            },
            {
              // Created by zini
              name: '隐藏 PASELI 标识',
              patches: [{offset: 0xBD3BD, off: [0x0F, 0x84], on: [0x90, 0xE9]}]
            },
          ], "2018-01-16"),
          // all patches ported to IV by Zelminar unless specified otherwise
          // all original patches created by DJH unless specified otherwise
          new DllPatcher('soundvoltex', [
            {
              name: '所有 歌曲/难度 解锁',
              patches: [
                {offset: 0x152142, off: [0xE8, 0xF9, 0x41, 0x02], on: [0xB8, 0x0D, 0x00, 0x00]},
                {
                  offset: 0x1B4A31,
                  off: [0x8B, 0x44, 0x24, 0x20, 0xE8, 0xA6, 0xEC, 0xFF, 0xFF],
                  on: [0xB8, 0x03, 0x00, 0x00, 0x00, 0x90, 0x90, 0x90, 0x90]
                }
              ]
            },
            {
              name: '全曲 "Safe"',
              tooltip: '失败将不会结束本局游戏',
              patches: [{offset: 0x171B07, off: [0x32, 0xC0], on: [0xB0, 0x01]}]
            },
            {
              // Created by mon
              name: '不在歌曲封面显示 "Safe" 标识',
              tooltip: 'Remove visual clutter',
              patches: [{offset: 0x2E9C44, off: [0x73], on: [0x00]}]
            },
            {
              name: '启动时更改系统音量',
              patches: [{offset: 0x2451EA, off: [0xE8, 0x21, 0x03, 0x00, 0x00], on: [0x90, 0x90, 0x90, 0x90, 0x90]}]
            },
            {
              name: '启动进入 Event Mode',
              patches: [{offset: 0x196562, off: [0x00], on: [0x01]}]
            },
            {
              // created by zini
              name: '关闭 EVENT MODE/FREE PLAY 标识',
              patches: [{offset: 0xBC920, off: [0xE8, 0x6B], on: [0xEB, 0x03]}]
            },
            {
              name: 'PFree (无限次数游玩)',
              patches: [
                {offset: 0x1CAAFF, off: [0x00], on: [0x02]},
                {
                  offset: 0x1CACC6,
                  off: [0x8B, 0x83, 0x64, 0x10, 0x00, 0x00, 0x8D, 0x48, 0x01, 0x83, 0xF9, 0x04, 0x56, 0x57, 0x7F, 0x52],
                  on: [0xB8, 0x01, 0x00, 0x00, 0x00, 0x89, 0x83, 0x64, 0x10, 0x00, 0x00, 0x90, 0x56, 0x57, 0x90, 0x90]
                }
              ]
            },
            {
              // Created by mon
              name: 'Hispeed 更改 0.1 to 20.0',
              patches: [
                {offset: 0x12198B, off: [0xDD, 0x05, 0xF8, 0x87, 0x2D, 0x10], on: [0xD9, 0x05, 0xA0, 0x89, 0x2D, 0x10]},
                {offset: 0x1219A0, off: [0xDD, 0x05, 0x00, 0x88, 0x2D, 0x10], on: [0xD9, 0x05, 0xE4, 0x86, 0x2D, 0x10]},
                {offset: 0x1211C1, off: [0xDD, 0x05, 0xF8, 0x87, 0x2D, 0x10], on: [0xD9, 0x05, 0xA0, 0x89, 0x2D, 0x10]},
                {offset: 0x1211BB, off: [0xDD, 0x05, 0x00, 0x88, 0x2D, 0x10], on: [0xD9, 0x05, 0xE4, 0x86, 0x2D, 0x10]}
              ]
            },
            {
              // thanks Element4521
              name: '开启 ARS 选项',
              patches: [{offset: 0x171274, off: [0x74], on: [0xEB]}]
            },
            {
              // Created by runner38
              name: 'Non-Effective Rate 从 0% 开始计算',
              tooltip: 'This affects all "Hard" Gauge types',
              patches: [{offset: 0x11ACD0, off: [0x10, 0x27], on: [0x01, 0x00]}]
            },
            {
              // Created by runner38
              name: 'Non-Effective Rate 不回血',
              patches: [{offset: 0x11B14A, off: [0x01, 0x50, 0x48], on: [0x90, 0x90, 0x90]}]
            },
            {
              // Created by runner38
              name: '移除 Combo/Chain 显示',
              patches: [{offset: 0x1220B1, off: [0x8B, 0x45, 0x08], on: [0x90, 0x90, 0x90]}]
            },
            {
              // Created by Zelminar
              name: 'Omega Dimension 主题',
              tooltip: 'Replaces stock matching scene with Omega Dimension matching',
              patches: [{offset: 0x358B40, off: [0xDC, 0x5F, 0x30, 0x10], on: [0x38, 0x54, 0x30, 0x10]}]
            },
            {
              // Created by runner38
              name: '时间锁定',
              patches: [{offset: 0x75C1B, off: [0x8B, 0x43, 0x60, 0x85, 0xC0, 0x74, 0x04], on: [0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90]}]
            },
          ], "2017-11-28")
        ]);
      });
    </script>