<?php
/**
 * 配列
 */

namespace App;

class Arrays
{
    /**
     * 配列データの統計情報を連想配列で返す
     *
     * 引数の数値配列から次の連想配列を生成して返す
     * [
     *     'num' => $num,       // 個数
     *     'total' => $total,   // 合計
     *     'max' => $max,       // 最大値
     *     'min' => $min,       // 最小値
     *     'ave' => $ave,       // 平均値
     * ]
     *
     * @param array $nums 任意の数値の配列
     * @return array
     */
    public function getStatistic(array $nums)
    {
        $statistic = [];

        // TODO: ここで、連想配列 $statistic を作成する
        $statistic['num'] = count($nums);
        $statistic['total'] = array_sum($nums);
        $statistic['max'] = max($nums);
        $statistic['min'] = min($nums);
        $statistic['ave'] = $statistic['total'] / $statistic['num'];

        return $statistic;
    }

    /**
     * 入力配列から単一のカラムの値を返す
     *
     * 補足説明
     * array_column() 関数と同じ機能を実装せよ
     * http://php.net/manual/ja/function.array-column.php
     *
     * @param array $rows 入力配列。値を取り出したい多次元配列
     * @param mixed $key 値を返したいカラム
     * @return array 単一カラムの値の配列
     */
    public function getArrayColumn(array $input, $key)
    {
        $values = [];

        // TODO: ここで、$input から $key カラムのデータのみを抜き出し、$values 配列にセットする
        foreach ($input as $row) {
            $values[] = $row[$key];
        }
 
        return $values;
    }
}
