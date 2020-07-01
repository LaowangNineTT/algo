<?php

//给你 n 个非负整数 a1，a2，...，an，每个数代表坐标中的一个点 (i, ai) 。在坐标内画 n 条垂直线，垂直线 i 的两个端点分别为 (i,
//ai) 和 (i, 0)。找出其中的两条线，使得它们与 x 轴共同构成的容器可以容纳最多的水。
//
// 说明：你不能倾斜容器，且 n 的值至少为 2。
//
//
//
//
//
// 图中垂直线代表输入数组 [1,8,6,2,5,4,8,3,7]。在此情况下，容器能够容纳水（表示为蓝色部分）的最大值为 49。
//
//
//
// 示例：
//
// 输入：[1,8,6,2,5,4,8,3,7]
//输出：49
// Related Topics 数组 双指针


/*
 * 这里相当于是求最大面积，横轴和纵轴的最大面积，里面两个值，长度是可以互相规划的，长度就是两个i之间的差值
 * 高度就是两条线之间的，最低的那一根线的长度，就是ai
 * j-i * ai 就是容积，只不过有n个值，每个值有n-1个方案
 * */

//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
    }
}
//leetcode submit region end(Prohibit modification and deletion)
