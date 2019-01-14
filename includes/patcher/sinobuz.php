<!--This software was created by mon.im and was modified by Noah.-->
<script type="text/javascript">
            window.addEventListener("load", function() {
                new DllPatcherContainer([
                    new DllPatcher("bm2dx", [
                        {
                         name : "时间锁定",
                         patches : [{offset : 0x9BAEE, off: [0x74], on : [0xEB]}]
                        },
                        {
                         name : "90sec 选曲时间",
                         patches : [{offset : 0x350B4, off: [0x2D], on : [0x5A]}]
                        },
                        {
                         name : "无线次数",
                         patches : [{offset : 0x60A1B, off: [0x75], on : [0xEB]}]
                        },
                        {
                         name : "无线次数 (双人模式)",
                         patches : [{offset : 0x60B94, off: [0x74, 0x2f], on : [0x90, 0x90]},
                                    {offset : 0x60BA5, off: [0x0f, 0x85, 0x3b], on : [0xe9, 0x3c, 0xff]},
                                    {offset : 0x60BAA, off: [0xff], on : [0x90]}]
                        },
                        {
                         name : "无线次数 时间锁定",
                         patches : [{offset : 0x5DEAD, off: [0x48], on : [0x90]}]
                        },
                        {
                         name : "Level 12 解锁",
                         // size mismatch is intentional - new omni doesn't nop the last 2 bytes
                         patches : [{offset : 0x5BB35, off: [0x83, 0xFF, 0x02, 0x74, 0x0B, 0x83, 0xFF, 0x05, 0x74, 0x06, 0xB0, 0x01],
                                                       on : [0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90, 0x90]}]
                        },
                        {
                         name : "全曲解锁",
                         patches : [{offset : 0x5C005, off: [0x74, 0x15], on : [0x90, 0x90]}]
                        },
                        {
                         name : "Unlock All 日替",
                         patches : [{offset : 0x5E180, off: [0x56, 0x8B, 0xF1, 0xE8, 0x58, 0x57, 0xFD, 0xFF],
                                                       on : [0xB8, 0x01, 0x00, 0x00, 0x00, 0xC2, 0x04, 0x00]}]
                        },
                        {
                         name : "光标锁定",
                         patches : [{offset : 0x6C8E5, off: [0x74, 0x23], on : [0x90, 0x90]}]
                        },
                        {
                         name : "CS-Style 歌曲开始延迟",
                         patches : [{offset : 0x78D52, off: [0x7C], on : [0xEB]}]
                        },
                        {
                         name : "夜间模式",
                         patches : [{offset : 0x71cb7, off: [0x74, 0x3b], on : [0x90, 0x90]}]
                        },
                        {
                         name : "关闭分割线",
                         patches : [{offset : 0x3d540, off: [0x75], on : [0xEB]}]
                        },
                        {
                         name : "移除彩虹牌",
                         patches : [{offset : 0x12C34D, off: [0x5F], on : [0x00]}]
                        },
                        {
                         name : "音量Bug修复",
                         patches : [{offset : 0xda249, off: [0x00], on : [0x01]}]
                        },
                        {
                         name : "Free play 文字显示LED",
                         patches : [{offset : 0x150EA, off: [0xE0, 0x8F, 0x12, 0x10], on : [0x64, 0x99, 0x6A, 0x11]}]
                        },
                        {
                         name : "Free play 文字显示LED (左上角)",
                         patches : [{offset : 0xA4615, off: [0x74, 0x32], on : [0x90, 0x90]},
                                    {offset : 0xA4630, off: [0x54, 0x1D, 0x16, 0x10], on : [0x64, 0x99, 0x6A, 0x11]}]
                        },
                        {
                         name : "开发者模式(不保存成绩)",
                         patches : [{offset : 0x579B0, off: [0x32, 0xC0], on : [0x0C, 0x01]}]
                        },
                        {
                         name : "跳过刷卡",
                         patches : [{offset : 0x63E34, off: [0x32], on : [0x20]}]
                        },
                        {
                         name : "快速重开",
                         patches : [{offset : 0x4e284, off: [0x8A, 0xC3], on : [0xB0, 0x01]}]
                        },
                    ], "stock"),

                    new DllPatcher("bm2dx_omni", [
                        {
                         name : "时间锁定",
                         patches : [{offset : 0x9BCFE, off: [0x74], on : [0xEB]}]
                        },
                        {
                         name : "无线次数",
                         patches : [{offset : 0x60B9B, off: [0x75], on : [0xEB]}]
                        },
                        {
                         name : "无线次数 (2 player mode)",
                         patches : [{offset : 0x60D14, off: [0x74, 0x2f], on : [0x90, 0x90]},
                                    {offset : 0x60D25, off: [0x0f, 0x85, 0x3b], on : [0xe9, 0x3c, 0xff]},
                                    {offset : 0x60D2A, off: [0xff], on : [0x90]}]
                        },
                        {
                         name : "无线次数 时间锁定",
                         patches : [{offset : 0x5DFFD, off: [0x48], on : [0x90]}]
                        },
                        {
                         name : "全曲解锁",
                         patches : [{offset : 0x5C125, off: [0x74, 0x15], on : [0x90, 0x90]}]
                        },
                        {
                         name : "光标锁定",
                         patches : [{offset : 0x6CAE5, off: [0x74, 0x23], on : [0x90, 0x90]}]
                        },
                        {
                         name : "CS-Style 歌曲开始延迟",
                         patches : [{offset : 0x78EE2, off: [0x7C], on : [0xEB]}]
                        },
                        {
                         name : "夜间模式",
                         patches : [{offset : 0x71E57, off: [0x74, 0x3b], on : [0x90, 0x90]}]
                        },
                        {
                         name : "关闭分割线",
                         patches : [{offset : 0x3d450, off: [0x75], on : [0xEB]}]
                        },
                        {
                         name : "移除彩虹牌",
                         patches : [{offset : 0x12C355, off: [0x5F], on : [0x00]}]
                        },
                        {
                         name : "音量Bug修复",
                         patches : [{offset : 0xDA219, off: [0x00], on : [0x01]}]
                        },
                        {
                         name : "Free play 文字显示LED",
                         patches : [{offset : 0x150EA, off: [0xE0, 0x8F, 0x12, 0x10], on : [0x64, 0x99, 0x6A, 0x11]}]
                        },
                        {
                         name : "Free play 文字显示LED (Upper left)",
                         patches : [{offset : 0xA4865, off: [0x74, 0x32], on : [0x90, 0x90]},
                                    {offset : 0xA4880, off: [0x8c, 0x1D, 0x16, 0x10], on : [0x64, 0x99, 0x6A, 0x11]}]
                        },
                        {
                         name : "开发者模式(不保存成绩)",
                         patches : [{offset : 0xa2ef0, off: [0x32, 0xC0], on : [0x0C, 0x01]}]
                        },
                        {
                         name : "跳过刷卡",
                         patches : [{offset : 0x64014, off: [0x32], on : [0x20]}]
                        },
                        {
                         name : "快速重开",
                         patches : [{offset : 0x4e154, off: [0x8A, 0xC3], on : [0xB0, 0x01]}]
                        },
                    ], "omnimix")
                ]);
            });
        </script>